<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\CarteDuJour;
use App\Entity\CompositionAccompagnement;
use App\Entity\CompositionDessert;
use App\Entity\CompositionEntree;
use App\Entity\CompositionFormule;
use App\Entity\CompositionLieu;
use App\Entity\CompositionPlat;
use App\Entity\CompositionSalade;
use App\Entity\Reservation;
use App\Entity\StatutCommande;
use App\Repository\CarteDuJourRepository;
use App\Repository\MessRequestRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_CHEF')]
final class ChefController extends AbstractController
{
    #[Route('/chef/agenda', name: 'chef_agenda')]
    public function agenda(CarteDuJourRepository $carteRepo, ReservationRepository $reservationRepo, MessRequestRepository $messRequestRepo, EntityManagerInterface $em): Response
    {
        $today = new \DateTime('today');
        $endDate = (clone $today)->modify('+60 days');
        
        $menus = $carteRepo->findByDateRange($today, $endDate);
        
        // Créer un tableau associatif date => menu avec statistiques
        $menusByDate = [];
        $formuleRepo = $em->getRepository(\App\Entity\Formule::class);
        $formuleRestaurant = $formuleRepo->findOneBy(['name' => 'menu complet']);
        $formuleSalade = $formuleRepo->findOneBy(['name' => 'salade']);
        
        // Récupérer les IDs des formules pour comparaison
        $formuleRestaurantId = $formuleRestaurant ? $formuleRestaurant->getId() : null;
        $formuleSaladeId = $formuleSalade ? $formuleSalade->getId() : null;
        
        foreach ($menus as $menu) {
            $dateKey = $menu->getDate()->format('Y-m-d');
            
            // Normaliser la date du menu pour la recherche (sans heure)
            $menuDate = clone $menu->getDate();
            $menuDate->setTime(0, 0, 0);
            
            // Compter les réservations par formule pour ce jour
            $reservations = $reservationRepo->findByDate($menuDate);
            
            $countRestaurant = 0;
            $countSalade = 0;
            $countMess = 0;
            $hasMess = false;
            
            foreach ($reservations as $reservation) {
                $reservationFormule = $reservation->getFormule();
                if ($reservationFormule) {
                    // Comparer par ID plutôt que par référence d'objet
                    $reservationFormuleId = $reservationFormule->getId();
                    if ($reservationFormuleId === $formuleRestaurantId) {
                        $countRestaurant++;
                    } elseif ($reservationFormuleId === $formuleSaladeId) {
                        $countSalade++;
                    }
                }
            }
            
            // Compter les demandes Mess pour ce jour
            $messRequests = $messRequestRepo->createQueryBuilder('m')
                ->where('m.date = :date')
                ->setParameter('date', $menu->getDate()->format('Y-m-d'))
                ->getQuery()
                ->getResult();
            $countMess = count($messRequests);
            
            // Vérifier si la formule "Mess" est active pour ce menu
            $formuleMess = $formuleRepo->findOneBy(['name' => 'Mess']);
            if ($formuleMess) {
                foreach ($menu->getCompositionFormules() as $compFormule) {
                    if ($compFormule->getFormule() === $formuleMess) {
                        $hasMess = true;
                        break;
                    }
                }
            }
            
            // Récupérer les lieux actifs
            $activeLieus = [];
            foreach ($menu->getCompositionLieus() as $compLieu) {
                if ($compLieu->isActive()) {
                    $activeLieus[] = $compLieu->getLieu();
                }
            }
            
            $menusByDate[$dateKey] = [
                'menu' => $menu,
                'countRestaurant' => $countRestaurant,
                'countSalade' => $countSalade,
                'countMess' => $countMess,
                'hasMess' => $hasMess,
                'activeLieus' => $activeLieus,
            ];
        }

        return $this->render('chef/agenda.html.twig', [
            'menusByDate' => $menusByDate,
            'today' => $today,
            'endDate' => $endDate,
        ]);
    }

    #[Route('/chef/menu/{date}', name: 'chef_menu_day', methods: ['GET', 'POST'])]
    public function menuDay(string $date, Request $request, EntityManagerInterface $em, CarteDuJourRepository $carteRepo, ReservationRepository $reservationRepo): Response
    {
        try {
            $dateObj = new \DateTime($date);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Date invalide.');
            return $this->redirectToRoute('chef_agenda');
        }

        $carteDuJour = $carteRepo->findOneBy(['date' => $dateObj]);
        $isNew = !$carteDuJour;

        // Créer une carte vide pour l'affichage si elle n'existe pas (GET uniquement)
        if ($isNew && $request->isMethod('GET')) {
            $carteDuJour = new CarteDuJour();
            $carteDuJour->setDate($dateObj)
                ->setPrice('4.50')
                ->setAvailable(true)
                ->setLocked(false);
        } elseif ($carteDuJour && $request->isMethod('GET')) {
            // S'assurer que les collections sont bien chargées depuis la base
            // Force le chargement des relations pour éviter les problèmes de lazy loading
            $carteDuJour->getCompositionLieus()->toArray();
            $carteDuJour->getCompositionFormules()->toArray();
        }

        // Vérifier si réservations existent
        $hasReservations = count($reservationRepo->findByDate($dateObj)) > 0;

        if ($request->isMethod('POST')) {
            // Créer la carte si elle n'existe pas
            if ($isNew) {
                $carteDuJour = new CarteDuJour();
                $carteDuJour->setDate($dateObj);
            }
            
            $price = (float) $request->request->get('price', 0);
            $comment = trim((string) $request->request->get('comment', ''));
            
            // Si un commentaire est présent, c'est une fermeture
            $isClosure = !empty($comment);
            
            // Si fermeture, verrouiller et désactiver
            $locked = $isClosure || $request->request->get('locked') === '1';
            $available = !$isClosure && $request->request->get('available') !== '0';

            if ($price < 0.50 || $price > 50) {
                $this->addFlash('danger', 'Le prix doit être entre 0.50€ et 50€.');
                return $this->redirectToRoute('chef_menu_day', ['date' => $date]);
            }
            
            $carteDuJour->setPrice((string) $price)
                ->setLocked($locked)
                ->setAvailable($available)
                ->setComment($isClosure ? $comment : null);

            // Gérer les modes de livraison (lieux)
            $lieuRepo = $em->getRepository(\App\Entity\Lieu::class);
            $allLieus = $lieuRepo->findAll();
            
            // Si fermeture, aucun lieu actif
            $activeLieus = $isClosure ? [] : ($request->request->all('lieus') ?? []);
            
            // Convertir les IDs en entiers pour la comparaison
            $activeLieus = array_map('intval', $activeLieus);

            // Supprimer les anciennes compositions de lieux
            foreach ($carteDuJour->getCompositionLieus() as $comp) {
                $em->remove($comp);
            }
            $carteDuJour->getCompositionLieus()->clear();

            // Créer les nouvelles compositions de lieux
            foreach ($allLieus as $lieu) {
                $compLieu = new CompositionLieu();
                $compLieu->setCarteDuJour($carteDuJour)
                    ->setLieu($lieu)
                    ->setActive(in_array($lieu->getId(), $activeLieus));
                $carteDuJour->getCompositionLieus()->add($compLieu);
                $em->persist($compLieu);
            }

            // Gérer les formules
            $formuleRepo = $em->getRepository(\App\Entity\Formule::class);
            $allFormules = $formuleRepo->findAll();
            $activeFormules = $request->request->all('formules') ?? [];
            
            // Convertir les IDs en entiers pour la comparaison
            $activeFormules = array_map('intval', $activeFormules);

            // Supprimer les anciennes compositions de formules
            foreach ($carteDuJour->getCompositionFormules() as $comp) {
                $em->remove($comp);
            }
            $carteDuJour->getCompositionFormules()->clear();

            // Créer les nouvelles compositions de formules (seulement pour les formules actives)
            foreach ($allFormules as $formule) {
                if (in_array($formule->getId(), $activeFormules)) {
                    $compFormule = new CompositionFormule();
                    $compFormule->setCarteDuJour($carteDuJour)
                        ->setFormule($formule);
                    $carteDuJour->getCompositionFormules()->add($compFormule);
                    $em->persist($compFormule);
                }
            }

            $em->persist($carteDuJour);
            $em->flush();

            $this->addFlash('success', 'Menu du jour enregistré avec succès.');
            return $this->redirectToRoute('chef_agenda');
        }

        // Récupérer toutes les entités pour les formulaires
        $entreeRepo = $em->getRepository(\App\Entity\Entree::class);
        $platRepo = $em->getRepository(\App\Entity\Plat::class);
        $accompagnementRepo = $em->getRepository(\App\Entity\Accompagnement::class);
        $dessertRepo = $em->getRepository(\App\Entity\Dessert::class);
        $saladeRepo = $em->getRepository(\App\Entity\Salade::class);
        $lieuRepo = $em->getRepository(\App\Entity\Lieu::class);
        $formuleRepo = $em->getRepository(\App\Entity\Formule::class);

        return $this->render('chef/menu-day.html.twig', [
            'carteDuJour' => $carteDuJour,
            'date' => $dateObj,
            'hasReservations' => $hasReservations,
            'entrees' => $entreeRepo->findAll(),
            'plats' => $platRepo->findAll(),
            'accompagnements' => $accompagnementRepo->findAll(),
            'desserts' => $dessertRepo->findAll(),
            'salades' => $saladeRepo->findAll(),
            'lieus' => $lieuRepo->findAll(),
            'formules' => $formuleRepo->findAll(),
        ]);
    }

    #[Route('/chef/salades/{date}', name: 'chef_select_salades', methods: ['GET', 'POST'])]
    public function selectSalades(string $date, Request $request, EntityManagerInterface $em, CarteDuJourRepository $carteRepo): Response
    {
        try {
            $dateObj = new \DateTime($date);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Date invalide.');
            return $this->redirectToRoute('chef_agenda');
        }

        $carteDuJour = $carteRepo->findOneBy(['date' => $dateObj]);
        
        if (!$carteDuJour) {
            $this->addFlash('danger', 'Menu du jour non trouvé. Créez-le d\'abord.');
            return $this->redirectToRoute('chef_menu_day', ['date' => $date]);
        }

        $saladeRepo = $em->getRepository(\App\Entity\Salade::class);

        if ($request->isMethod('POST')) {
            // Gérer la création d'une nouvelle salade
            if ($request->request->has('new_salade_name')) {
                $name = trim($request->request->get('new_salade_name', ''));
                $description = trim($request->request->get('new_salade_description', ''));
                
                if (!empty($name)) {
                    $newSalade = new \App\Entity\Salade();
                    $newSalade->setName($name)->setDescription($description);
                    $em->persist($newSalade);
                    $em->flush();
                    $this->addFlash('success', 'Salade créée avec succès.');
                }
            }

            // Gérer la sélection des salades
            $selectedSalades = $request->request->all('salades') ?? [];
            $selectedSalades = array_map('intval', $selectedSalades);

            // Supprimer les anciennes compositions de salades
            foreach ($carteDuJour->getCompositionSalades() as $comp) {
                $em->remove($comp);
            }
            $carteDuJour->getCompositionSalades()->clear();

            // Créer les nouvelles compositions
            foreach ($selectedSalades as $saladeId) {
                $salade = $saladeRepo->find($saladeId);
                if ($salade) {
                    $comp = new CompositionSalade();
                    $comp->setCarteDuJour($carteDuJour)->setSalade($salade);
                    $carteDuJour->getCompositionSalades()->add($comp);
                    $em->persist($comp);
                }
            }

            $em->flush();
            $this->addFlash('success', 'Salades sélectionnées avec succès.');
            return $this->redirectToRoute('chef_menu_day', ['date' => $date]);
        }

        // Récupérer toutes les salades
        $allSalades = $saladeRepo->findAll();
        
        // Récupérer les IDs sélectionnés
        $selectedSaladeIds = [];
        foreach ($carteDuJour->getCompositionSalades() as $comp) {
            $selectedSaladeIds[] = $comp->getSalade()->getId();
        }

        return $this->render('chef/select-salades.html.twig', [
            'carteDuJour' => $carteDuJour,
            'date' => $dateObj,
            'salades' => $allSalades,
            'selectedSaladeIds' => $selectedSaladeIds,
        ]);
    }

    #[Route('/chef/menu-complet/{date}', name: 'chef_select_menu_complet', methods: ['GET', 'POST'])]
    public function selectMenuComplet(string $date, Request $request, EntityManagerInterface $em, CarteDuJourRepository $carteRepo): Response
    {
        try {
            $dateObj = new \DateTime($date);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Date invalide.');
            return $this->redirectToRoute('chef_agenda');
        }

        $carteDuJour = $carteRepo->findOneBy(['date' => $dateObj]);
        
        if (!$carteDuJour) {
            $this->addFlash('danger', 'Menu du jour non trouvé. Créez-le d\'abord.');
            return $this->redirectToRoute('chef_menu_day', ['date' => $date]);
        }

        $entreeRepo = $em->getRepository(\App\Entity\Entree::class);
        $platRepo = $em->getRepository(\App\Entity\Plat::class);
        $accompagnementRepo = $em->getRepository(\App\Entity\Accompagnement::class);

        if ($request->isMethod('POST')) {
            // Gérer la création de nouveaux items
            if ($request->request->has('new_item_name')) {
                $name = trim($request->request->get('new_item_name', ''));
                $description = trim($request->request->get('new_item_description', ''));
                $type = $request->request->get('new_item_type', ''); // 'entree', 'plat', 'accompagnement'
                
                if (!empty($name) && !empty($type)) {
                    if ($type === 'entree') {
                        $newItem = new \App\Entity\Entree();
                        $newItem->setName($name)->setDescription($description);
                        $em->persist($newItem);
                    } elseif ($type === 'plat') {
                        $newItem = new \App\Entity\Plat();
                        $newItem->setName($name)->setDescription($description);
                        $em->persist($newItem);
                    } elseif ($type === 'accompagnement') {
                        $newItem = new \App\Entity\Accompagnement();
                        $newItem->setName($name)->setDescription($description);
                        $em->persist($newItem);
                    }
                    $em->flush();
                    $this->addFlash('success', ucfirst($type) . ' créé avec succès.');
                }
            }

            // Gérer la sélection
            $selectedEntrees = array_map('intval', $request->request->all('entrees') ?? []);
            $selectedPlats = array_map('intval', $request->request->all('plats') ?? []);
            $selectedAccompagnements = array_map('intval', $request->request->all('accompagnements') ?? []);

            // Supprimer les anciennes compositions
            foreach ($carteDuJour->getCompositionEntrees() as $comp) {
                $em->remove($comp);
            }
            $carteDuJour->getCompositionEntrees()->clear();

            foreach ($carteDuJour->getCompositionPlats() as $comp) {
                $em->remove($comp);
            }
            $carteDuJour->getCompositionPlats()->clear();

            foreach ($carteDuJour->getCompositionAccompagnements() as $comp) {
                $em->remove($comp);
            }
            $carteDuJour->getCompositionAccompagnements()->clear();

            // Créer les nouvelles compositions
            foreach ($selectedEntrees as $entreeId) {
                $entree = $entreeRepo->find($entreeId);
                if ($entree) {
                    $comp = new CompositionEntree();
                    $comp->setCarteDuJour($carteDuJour)->setEntree($entree);
                    $carteDuJour->getCompositionEntrees()->add($comp);
                    $em->persist($comp);
                }
            }

            foreach ($selectedPlats as $platId) {
                $plat = $platRepo->find($platId);
                if ($plat) {
                    $comp = new CompositionPlat();
                    $comp->setCarteDuJour($carteDuJour)->setPlat($plat);
                    $carteDuJour->getCompositionPlats()->add($comp);
                    $em->persist($comp);
                }
            }

            foreach ($selectedAccompagnements as $accompagnementId) {
                $accompagnement = $accompagnementRepo->find($accompagnementId);
                if ($accompagnement) {
                    $comp = new CompositionAccompagnement();
                    $comp->setCarteDuJour($carteDuJour)->setAccompagnement($accompagnement);
                    $carteDuJour->getCompositionAccompagnements()->add($comp);
                    $em->persist($comp);
                }
            }

            $em->flush();
            $this->addFlash('success', 'Menu complet sélectionné avec succès.');
            return $this->redirectToRoute('chef_menu_day', ['date' => $date]);
        }

        // Récupérer tous les items
        $allEntrees = $entreeRepo->findAll();
        $allPlats = $platRepo->findAll();
        $allAccompagnements = $accompagnementRepo->findAll();
        
        // Récupérer les IDs sélectionnés
        $selectedEntreeIds = [];
        foreach ($carteDuJour->getCompositionEntrees() as $comp) {
            $selectedEntreeIds[] = $comp->getEntree()->getId();
        }
        $selectedPlatIds = [];
        foreach ($carteDuJour->getCompositionPlats() as $comp) {
            $selectedPlatIds[] = $comp->getPlat()->getId();
        }
        $selectedAccompagnementIds = [];
        foreach ($carteDuJour->getCompositionAccompagnements() as $comp) {
            $selectedAccompagnementIds[] = $comp->getAccompagnement()->getId();
        }

        return $this->render('chef/select-menu-complet.html.twig', [
            'carteDuJour' => $carteDuJour,
            'date' => $dateObj,
            'entrees' => $allEntrees,
            'plats' => $allPlats,
            'accompagnements' => $allAccompagnements,
            'selectedEntreeIds' => $selectedEntreeIds,
            'selectedPlatIds' => $selectedPlatIds,
            'selectedAccompagnementIds' => $selectedAccompagnementIds,
        ]);
    }

    #[Route('/chef/meals/{date}', name: 'chef_manage_meals', methods: ['GET', 'POST'])]
    public function manageMeals(string $date, Request $request, EntityManagerInterface $em, CarteDuJourRepository $carteRepo): Response
    {
        try {
            $dateObj = new \DateTime($date);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Date invalide.');
            return $this->redirectToRoute('chef_agenda');
        }

        $carteDuJour = $carteRepo->findOneBy(['date' => $dateObj]);
        
        if (!$carteDuJour) {
            $this->addFlash('danger', 'Menu du jour non trouvé. Créez-le d\'abord.');
            return $this->redirectToRoute('chef_menu_day', ['date' => $date]);
        }

        if ($request->isMethod('POST')) {
            $selectedEntrees = $request->request->all('entrees') ?? [];
            $selectedPlats = $request->request->all('plats') ?? [];
            $selectedAccompagnements = $request->request->all('accompagnements') ?? [];
            $selectedDesserts = $request->request->all('desserts') ?? [];
            $selectedSalades = $request->request->all('salades') ?? [];

            // Supprimer les anciennes compositions
            foreach ($carteDuJour->getCompositionEntrees() as $comp) {
                $em->remove($comp);
            }
            foreach ($carteDuJour->getCompositionPlats() as $comp) {
                $em->remove($comp);
            }
            foreach ($carteDuJour->getCompositionAccompagnements() as $comp) {
                $em->remove($comp);
            }
            foreach ($carteDuJour->getCompositionDesserts() as $comp) {
                $em->remove($comp);
            }
            foreach ($carteDuJour->getCompositionSalades() as $comp) {
                $em->remove($comp);
            }

            // Créer les nouvelles compositions
            $entreeRepo = $em->getRepository(\App\Entity\Entree::class);
            $platRepo = $em->getRepository(\App\Entity\Plat::class);
            $accompagnementRepo = $em->getRepository(\App\Entity\Accompagnement::class);
            $dessertRepo = $em->getRepository(\App\Entity\Dessert::class);
            $saladeRepo = $em->getRepository(\App\Entity\Salade::class);

            foreach ($selectedEntrees as $entreeId) {
                $entree = $entreeRepo->find($entreeId);
                if ($entree) {
                    $comp = new CompositionEntree();
                    $comp->setCarteDuJour($carteDuJour)->setEntree($entree);
                    $em->persist($comp);
                }
            }

            foreach ($selectedPlats as $platId) {
                $plat = $platRepo->find($platId);
                if ($plat) {
                    $comp = new CompositionPlat();
                    $comp->setCarteDuJour($carteDuJour)->setPlat($plat);
                    $em->persist($comp);
                }
            }

            foreach ($selectedAccompagnements as $accompagnementId) {
                $accompagnement = $accompagnementRepo->find($accompagnementId);
                if ($accompagnement) {
                    $comp = new CompositionAccompagnement();
                    $comp->setCarteDuJour($carteDuJour)->setAccompagnement($accompagnement);
                    $em->persist($comp);
                }
            }

            foreach ($selectedDesserts as $dessertId) {
                $dessert = $dessertRepo->find($dessertId);
                if ($dessert) {
                    $comp = new CompositionDessert();
                    $comp->setCarteDuJour($carteDuJour)->setDessert($dessert);
                    $em->persist($comp);
                }
            }

            foreach ($selectedSalades as $saladeId) {
                $salade = $saladeRepo->find($saladeId);
                if ($salade) {
                    $comp = new CompositionSalade();
                    $comp->setCarteDuJour($carteDuJour)->setSalade($salade);
                    $em->persist($comp);
                }
            }

            $em->flush();
            $this->addFlash('success', 'Plats sélectionnés avec succès.');
            return $this->redirectToRoute('chef_manage_meals', ['date' => $date]);
        }

        // Récupérer toutes les entités
        $entreeRepo = $em->getRepository(\App\Entity\Entree::class);
        $platRepo = $em->getRepository(\App\Entity\Plat::class);
        $accompagnementRepo = $em->getRepository(\App\Entity\Accompagnement::class);
        $dessertRepo = $em->getRepository(\App\Entity\Dessert::class);
        $saladeRepo = $em->getRepository(\App\Entity\Salade::class);

        // Récupérer les IDs sélectionnés
        $selectedEntreeIds = [];
        foreach ($carteDuJour->getCompositionEntrees() as $comp) {
            $selectedEntreeIds[] = $comp->getEntree()->getId();
        }
        $selectedPlatIds = [];
        foreach ($carteDuJour->getCompositionPlats() as $comp) {
            $selectedPlatIds[] = $comp->getPlat()->getId();
        }
        $selectedAccompagnementIds = [];
        foreach ($carteDuJour->getCompositionAccompagnements() as $comp) {
            $selectedAccompagnementIds[] = $comp->getAccompagnement()->getId();
        }
        $selectedDessertIds = [];
        foreach ($carteDuJour->getCompositionDesserts() as $comp) {
            $selectedDessertIds[] = $comp->getDessert()->getId();
        }
        $selectedSaladeIds = [];
        foreach ($carteDuJour->getCompositionSalades() as $comp) {
            $selectedSaladeIds[] = $comp->getSalade()->getId();
        }

        return $this->render('chef/manage-meals.html.twig', [
            'carteDuJour' => $carteDuJour,
            'date' => $dateObj,
            'entrees' => $entreeRepo->findAll(),
            'plats' => $platRepo->findAll(),
            'accompagnements' => $accompagnementRepo->findAll(),
            'desserts' => $dessertRepo->findAll(),
            'salades' => $saladeRepo->findAll(),
            'selectedEntreeIds' => $selectedEntreeIds,
            'selectedPlatIds' => $selectedPlatIds,
            'selectedAccompagnementIds' => $selectedAccompagnementIds,
            'selectedDessertIds' => $selectedDessertIds,
            'selectedSaladeIds' => $selectedSaladeIds,
        ]);
    }

    // CRUD Entrees
    #[Route('/chef/entrees', name: 'chef_entrees')]
    public function entrees(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Entree::class);
        return $this->render('chef/entrees/index.html.twig', [
            'entrees' => $repo->findAll(),
        ]);
    }

    #[Route('/chef/entrees/new', name: 'chef_entrees_new', methods: ['GET', 'POST'])]
    public function entreesNew(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/entrees/new.html.twig');
            }

            $entree = new \App\Entity\Entree();
            $entree->setName($name)->setDescription($description);
            $em->persist($entree);
            $em->flush();

            $this->addFlash('success', 'Entrée créée avec succès.');
            return $this->redirectToRoute('chef_entrees');
        }

        return $this->render('chef/entrees/new.html.twig');
    }

    #[Route('/chef/entrees/{id}/edit', name: 'chef_entrees_edit', methods: ['GET', 'POST'])]
    public function entreesEdit(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Entree::class);
        $entree = $repo->find($id);

        if (!$entree) {
            $this->addFlash('danger', 'Entrée non trouvée.');
            return $this->redirectToRoute('chef_entrees');
        }

        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/entrees/edit.html.twig', ['entree' => $entree]);
            }

            $entree->setName($name)->setDescription($description);
            $em->flush();

            $this->addFlash('success', 'Entrée modifiée avec succès.');
            return $this->redirectToRoute('chef_entrees');
        }

        return $this->render('chef/entrees/edit.html.twig', ['entree' => $entree]);
    }

    #[Route('/chef/entrees/{id}/delete', name: 'chef_entrees_delete', methods: ['POST'])]
    public function entreesDelete(int $id, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Entree::class);
        $entree = $repo->find($id);

        if ($entree) {
            $em->remove($entree);
            $em->flush();
            $this->addFlash('success', 'Entrée supprimée.');
        }

        return $this->redirectToRoute('chef_entrees');
    }

    // CRUD Plats
    #[Route('/chef/plats', name: 'chef_plats')]
    public function plats(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Plat::class);
        return $this->render('chef/plats/index.html.twig', [
            'plats' => $repo->findAll(),
        ]);
    }

    #[Route('/chef/plats/new', name: 'chef_plats_new', methods: ['GET', 'POST'])]
    public function platsNew(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/plats/new.html.twig');
            }

            $plat = new \App\Entity\Plat();
            $plat->setName($name)->setDescription($description);
            $em->persist($plat);
            $em->flush();

            $this->addFlash('success', 'Plat créé avec succès.');
            return $this->redirectToRoute('chef_plats');
        }

        return $this->render('chef/plats/new.html.twig');
    }

    #[Route('/chef/plats/{id}/edit', name: 'chef_plats_edit', methods: ['GET', 'POST'])]
    public function platsEdit(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Plat::class);
        $plat = $repo->find($id);

        if (!$plat) {
            $this->addFlash('danger', 'Plat non trouvé.');
            return $this->redirectToRoute('chef_plats');
        }

        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/plats/edit.html.twig', ['plat' => $plat]);
            }

            $plat->setName($name)->setDescription($description);
            $em->flush();

            $this->addFlash('success', 'Plat modifié avec succès.');
            return $this->redirectToRoute('chef_plats');
        }

        return $this->render('chef/plats/edit.html.twig', ['plat' => $plat]);
    }

    #[Route('/chef/plats/{id}/delete', name: 'chef_plats_delete', methods: ['POST'])]
    public function platsDelete(int $id, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Plat::class);
        $plat = $repo->find($id);

        if ($plat) {
            $em->remove($plat);
            $em->flush();
            $this->addFlash('success', 'Plat supprimé.');
        }

        return $this->redirectToRoute('chef_plats');
    }

    // CRUD Accompagnements
    #[Route('/chef/accompagnements', name: 'chef_accompagnements')]
    public function accompagnements(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Accompagnement::class);
        return $this->render('chef/accompagnements/index.html.twig', [
            'accompagnements' => $repo->findAll(),
        ]);
    }

    #[Route('/chef/accompagnements/new', name: 'chef_accompagnements_new', methods: ['GET', 'POST'])]
    public function accompagnementsNew(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/accompagnements/new.html.twig');
            }

            $accompagnement = new \App\Entity\Accompagnement();
            $accompagnement->setName($name)->setDescription($description);
            $em->persist($accompagnement);
            $em->flush();

            $this->addFlash('success', 'Accompagnement créé avec succès.');
            return $this->redirectToRoute('chef_accompagnements');
        }

        return $this->render('chef/accompagnements/new.html.twig');
    }

    #[Route('/chef/accompagnements/{id}/edit', name: 'chef_accompagnements_edit', methods: ['GET', 'POST'])]
    public function accompagnementsEdit(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Accompagnement::class);
        $accompagnement = $repo->find($id);

        if (!$accompagnement) {
            $this->addFlash('danger', 'Accompagnement non trouvé.');
            return $this->redirectToRoute('chef_accompagnements');
        }

        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/accompagnements/edit.html.twig', ['accompagnement' => $accompagnement]);
            }

            $accompagnement->setName($name)->setDescription($description);
            $em->flush();

            $this->addFlash('success', 'Accompagnement modifié avec succès.');
            return $this->redirectToRoute('chef_accompagnements');
        }

        return $this->render('chef/accompagnements/edit.html.twig', ['accompagnement' => $accompagnement]);
    }

    #[Route('/chef/accompagnements/{id}/delete', name: 'chef_accompagnements_delete', methods: ['POST'])]
    public function accompagnementsDelete(int $id, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Accompagnement::class);
        $accompagnement = $repo->find($id);

        if ($accompagnement) {
            $em->remove($accompagnement);
            $em->flush();
            $this->addFlash('success', 'Accompagnement supprimé.');
        }

        return $this->redirectToRoute('chef_accompagnements');
    }

    // CRUD Salades
    #[Route('/chef/salades', name: 'chef_salades')]
    public function salades(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Salade::class);
        return $this->render('chef/salades/index.html.twig', [
            'salades' => $repo->findAll(),
        ]);
    }

    #[Route('/chef/salades/new', name: 'chef_salades_new', methods: ['GET', 'POST'])]
    public function saladesNew(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/salades/new.html.twig');
            }

            $salade = new \App\Entity\Salade();
            $salade->setName($name)->setDescription($description);
            $em->persist($salade);
            $em->flush();

            $this->addFlash('success', 'Salade créée avec succès.');
            return $this->redirectToRoute('chef_salades');
        }

        return $this->render('chef/salades/new.html.twig');
    }

    #[Route('/chef/salades/{id}/edit', name: 'chef_salades_edit', methods: ['GET', 'POST'])]
    public function saladesEdit(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Salade::class);
        $salade = $repo->find($id);

        if (!$salade) {
            $this->addFlash('danger', 'Salade non trouvée.');
            return $this->redirectToRoute('chef_salades');
        }

        if ($request->isMethod('POST')) {
            $name = $request->request->get('name', '');
            $description = $request->request->get('description', '');

            if (empty($name)) {
                $this->addFlash('danger', 'Le nom est requis.');
                return $this->render('chef/salades/edit.html.twig', ['salade' => $salade]);
            }

            $salade->setName($name)->setDescription($description);
            $em->flush();

            $this->addFlash('success', 'Salade modifiée avec succès.');
            return $this->redirectToRoute('chef_salades');
        }

        return $this->render('chef/salades/edit.html.twig', ['salade' => $salade]);
    }

    #[Route('/chef/salades/{id}/delete', name: 'chef_salades_delete', methods: ['POST'])]
    public function saladesDelete(int $id, EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(\App\Entity\Salade::class);
        $salade = $repo->find($id);

        if ($salade) {
            $em->remove($salade);
            $em->flush();
            $this->addFlash('success', 'Salade supprimée.');
        }

        return $this->redirectToRoute('chef_salades');
    }

    #[Route('/chef/reservations', name: 'chef_reservations')]
    public function reservations(ReservationRepository $reservationRepo, Request $request, EntityManagerInterface $em): Response
    {
        $dateFilter = $request->query->get('date');
        $statutFilter = $request->query->get('statut');

        $qb = $reservationRepo->createQueryBuilder('r')
            ->orderBy('r.date', 'DESC')
            ->addOrderBy('r.createdAt', 'DESC');

        if ($dateFilter) {
            try {
                $dateObj = new \DateTime($dateFilter);
                $qb->andWhere('r.date = :date')
                    ->setParameter('date', $dateObj);
            } catch (\Exception $e) {
                // Ignore invalid date
            }
        }

        if ($statutFilter) {
            $qb->join('r.statutCommande', 's')
                ->andWhere('s.name = :statut')
                ->setParameter('statut', $statutFilter);
        }

        $reservations = $qb->getQuery()->getResult();

        $statutRepo = $em->getRepository(\App\Entity\StatutCommande::class);
        $statuts = $statutRepo->findAll();

        return $this->render('chef/reservations/index.html.twig', [
            'reservations' => $reservations,
            'statuts' => $statuts,
            'dateFilter' => $dateFilter,
            'statutFilter' => $statutFilter,
        ]);
    }

    #[Route('/chef/reservation/{id}', name: 'chef_reservation_details')]
    public function reservationDetails(int $id, ReservationRepository $reservationRepo): Response
    {
        $reservation = $reservationRepo->find($id);

        if (!$reservation) {
            $this->addFlash('danger', 'Réservation non trouvée.');
            return $this->redirectToRoute('chef_reservations');
        }

        return $this->render('chef/reservations/details.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/chef/reservation/{id}/mark-served', name: 'chef_reservation_mark_served', methods: ['POST'])]
    public function markServed(int $id, EntityManagerInterface $em, ReservationRepository $reservationRepo): Response
    {
        $reservation = $reservationRepo->find($id);

        if (!$reservation) {
            $this->addFlash('danger', 'Réservation non trouvée.');
            return $this->redirectToRoute('chef_reservations');
        }

        $statutRepo = $em->getRepository(\App\Entity\StatutCommande::class);
        $statutServed = $statutRepo->findOneBy(['name' => 'served']);
        
        if (!$statutServed) {
            $statutServed = new StatutCommande();
            $statutServed->setName('served');
            $em->persist($statutServed);
        }

        $reservation->setStatutCommande($statutServed);
        $em->flush();

        $this->addFlash('success', 'Réservation marquée comme servie.');
        return $this->redirectToRoute('chef_reservation_details', ['id' => $id]);
    }

    #[Route('/chef/settings', name: 'chef_settings', methods: ['GET', 'POST'])]
    public function settings(Request $request, EntityManagerInterface $em): Response
    {
        $lieuRepo = $em->getRepository(\App\Entity\Lieu::class);
        $formuleRepo = $em->getRepository(\App\Entity\Formule::class);

        if ($request->isMethod('POST')) {
            // Gérer la création/modification des lieux
            $lieuNames = $request->request->all('lieu_names') ?? [];
            $lieuIds = $request->request->all('lieu_ids') ?? [];

            foreach ($lieuNames as $index => $name) {
                if (empty($name)) continue;

                if (isset($lieuIds[$index]) && $lieuIds[$index]) {
                    $lieu = $lieuRepo->find($lieuIds[$index]);
                    if ($lieu) {
                        $lieu->setName($name);
                    }
                } else {
                    $lieu = new \App\Entity\Lieu();
                    $lieu->setName($name);
                    $em->persist($lieu);
                }
            }

            // Gérer la création/modification des formules
            $formuleNames = $request->request->all('formule_names') ?? [];
            $formuleIds = $request->request->all('formule_ids') ?? [];

            foreach ($formuleNames as $index => $name) {
                if (empty($name)) continue;

                if (isset($formuleIds[$index]) && $formuleIds[$index]) {
                    $formule = $formuleRepo->find($formuleIds[$index]);
                    if ($formule) {
                        $formule->setName($name);
                    }
                } else {
                    $formule = new \App\Entity\Formule();
                    $formule->setName($name);
                    $em->persist($formule);
                }
            }

            $em->flush();
            $this->addFlash('success', 'Paramètres enregistrés.');
            return $this->redirectToRoute('chef_settings');
        }

        return $this->render('chef/settings.html.twig', [
            'lieus' => $lieuRepo->findAll(),
            'formules' => $formuleRepo->findAll(),
        ]);
    }
}

