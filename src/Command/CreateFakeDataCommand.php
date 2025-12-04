<?php
declare(strict_types=1);

namespace App\Command;

use App\Entity\Accompagnement;
use App\Entity\CarteDuJour;
use App\Entity\Entree;
use App\Entity\Formule;
use App\Entity\Lieu;
use App\Entity\MessRequest;
use App\Entity\Plat;
use App\Entity\Reservation;
use App\Entity\Salade;
use App\Entity\StatutCommande;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-fake-data',
    description: 'Crée des utilisateurs et réservations fake pour rendre l\'application plus réaliste'
)]
final class CreateFakeDataCommand extends Command
{
    private array $fakeNames = [
        'Jean Dupont', 'Marie Martin', 'Pierre Bernard', 'Sophie Dubois', 'Luc Moreau',
        'Emma Laurent', 'Thomas Petit', 'Julie Roux', 'Antoine Simon', 'Camille Michel',
        'Nicolas Leroy', 'Laura Garcia', 'Alexandre Martinez', 'Clara Rodriguez', 'Maxime Lopez',
        'Léa Sanchez', 'Hugo Perez', 'Manon Gomez', 'Louis Fernandez', 'Chloé Torres'
    ];

    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly UserPasswordHasherInterface $hasher
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('users', null, InputOption::VALUE_OPTIONAL, 'Nombre d\'utilisateurs à créer', 10)
             ->addOption('reservations', null, InputOption::VALUE_OPTIONAL, 'Nombre de réservations par utilisateur', 5);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Création de données fake');

        $nbUsers = (int) $input->getOption('users');
        $nbReservations = (int) $input->getOption('reservations');

        // Récupérer les entités nécessaires
        $formuleRepo = $this->em->getRepository(Formule::class);
        $formuleSalade = $formuleRepo->findOneBy(['name' => 'salade']);
        $formuleRestaurant = $formuleRepo->findOneBy(['name' => 'menu complet']);
        $formuleMess = $formuleRepo->findOneBy(['name' => 'Mess']);

        $lieuRepo = $this->em->getRepository(Lieu::class);
        $lieux = $lieuRepo->findAll();

        $entreeRepo = $this->em->getRepository(Entree::class);
        $entrees = $entreeRepo->findAll();

        $platRepo = $this->em->getRepository(Plat::class);
        $plats = $platRepo->findAll();

        $accompagnementRepo = $this->em->getRepository(Accompagnement::class);
        $accompagnements = $accompagnementRepo->findAll();

        $saladeRepo = $this->em->getRepository(Salade::class);
        $salades = $saladeRepo->findAll();

        // Créer les statuts de commande s'ils n'existent pas
        $statutRepo = $this->em->getRepository(StatutCommande::class);
        $statutPending = $statutRepo->findOneBy(['name' => 'pending']);
        if (!$statutPending) {
            $statutPending = $this->createStatut('pending');
        }
        $statutConfirmed = $statutRepo->findOneBy(['name' => 'confirmed']);
        if (!$statutConfirmed) {
            $statutConfirmed = $this->createStatut('confirmed');
        }

        // Créer les utilisateurs fake
        $io->section('Création des utilisateurs fake');
        $users = [];
        $usedNames = [];

        for ($i = 0; $i < $nbUsers; $i++) {
            // Générer un nom unique
            if (count($usedNames) < count($this->fakeNames)) {
                // Utiliser les noms de la liste
                do {
                    $name = $this->fakeNames[array_rand($this->fakeNames)];
                } while (in_array($name, $usedNames));
                $usedNames[] = $name;
            } else {
                // Générer un nom aléatoire si on dépasse la liste
                $firstNames = ['Jean', 'Marie', 'Pierre', 'Sophie', 'Luc', 'Emma', 'Thomas', 'Julie', 'Antoine', 'Camille', 'Nicolas', 'Laura', 'Alexandre', 'Clara', 'Maxime', 'Léa', 'Hugo', 'Manon', 'Louis', 'Chloé'];
                $lastNames = ['Dupont', 'Martin', 'Bernard', 'Dubois', 'Moreau', 'Laurent', 'Petit', 'Roux', 'Simon', 'Michel', 'Leroy', 'Garcia', 'Martinez', 'Rodriguez', 'Lopez', 'Sanchez', 'Perez', 'Gomez', 'Fernandez', 'Torres'];
                $name = $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
                $counter = 1;
                while (in_array($name, $usedNames)) {
                    $name = $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)] . ' ' . $counter;
                    $counter++;
                }
                $usedNames[] = $name;
            }

            $email = strtolower(str_replace(' ', '.', $name)) . '@example.com';
            // S'assurer que l'email est unique
            $emailCounter = 1;
            $originalEmail = $email;
            while ($this->em->getRepository(User::class)->findOneBy(['email' => $email])) {
                $email = str_replace('@example.com', $emailCounter . '@example.com', $originalEmail);
                $emailCounter++;
            }

            $user = new User();
            $user->setEmail($email)
                 ->setName($name)
                 ->setRoles(['ROLE_EMPLOYEE'])
                 ->setCompteVerif(true)
                 ->setAdminVerif(false)
                 ->setBalance((string) rand(0, 200) . '.' . str_pad((string) rand(0, 99), 2, '0', STR_PAD_LEFT));
            $user->setPassword($this->hasher->hashPassword($user, 'password123'));
            
            $this->em->persist($user);
            $users[] = $user;
        }

        $this->em->flush();
        $io->success("{$nbUsers} utilisateurs fake créés");

        // Récupérer les cartes du jour existantes avec leurs compositions
        $carteRepo = $this->em->getRepository(CarteDuJour::class);
        $cartes = $carteRepo->createQueryBuilder('c')
            ->leftJoin('c.compositionFormules', 'cf')
            ->leftJoin('c.compositionLieus', 'cl')
            ->addSelect('cf')
            ->addSelect('cl')
            ->getQuery()
            ->getResult();

        if (empty($cartes)) {
            $io->warning('Aucune carte du jour trouvée. Créez d\'abord des menus avec app:create-test-data');
            return Command::SUCCESS;
        }

        // Filtrer les cartes qui ont au moins une formule active
        $cartesValides = [];
        foreach ($cartes as $carte) {
            $hasFormule = false;
            foreach ($carte->getCompositionFormules() as $compFormule) {
                if ($compFormule->getFormule()) {
                    $hasFormule = true;
                    break;
                }
            }
            if ($hasFormule) {
                $cartesValides[] = $carte;
            }
        }

        if (empty($cartesValides)) {
            $io->warning('Aucune carte du jour avec formule active trouvée. Configurez d\'abord les menus.');
            return Command::SUCCESS;
        }

        $cartes = $cartesValides;

        // Créer les réservations fake
        $io->section('Création des réservations fake');
        $reservationsCreated = 0;
        $messRequestsCreated = 0;

        foreach ($users as $user) {
            // Sélectionner aléatoirement quelques cartes (sans doublon)
            $nbCartesToSelect = min($nbReservations, count($cartes));
            $selectedIndices = [];
            while (count($selectedIndices) < $nbCartesToSelect) {
                $index = array_rand($cartes);
                if (!in_array($index, $selectedIndices)) {
                    $selectedIndices[] = $index;
                }
            }

            foreach ($selectedIndices as $carteIndex) {
                $carte = $cartes[$carteIndex];
                
                // Vérifier que la carte a des formules actives
                $formulesActives = [];
                foreach ($carte->getCompositionFormules() as $compFormule) {
                    if ($compFormule->getFormule()) {
                        $formulesActives[] = $compFormule->getFormule();
                    }
                }
                
                if (empty($formulesActives)) {
                    continue; // Passer à la carte suivante
                }
                
                // Décider aléatoirement du type de formule parmi celles disponibles
                $formuleType = rand(1, 3); // 1 = salade, 2 = restaurant, 3 = mess
                
                // Vérifier que la formule choisie est active pour cette carte
                $canUseSalade = $formuleSalade && !empty($salades) && in_array($formuleSalade, $formulesActives);
                $canUseRestaurant = $formuleRestaurant && !empty($entrees) && !empty($plats) && !empty($accompagnements) && in_array($formuleRestaurant, $formulesActives);
                $canUseMess = $formuleMess && in_array($formuleMess, $formulesActives);
                
                // Ajuster le type si la formule choisie n'est pas disponible
                if ($formuleType === 1 && !$canUseSalade) {
                    if ($canUseRestaurant) $formuleType = 2;
                    elseif ($canUseMess) $formuleType = 3;
                    else continue;
                } elseif ($formuleType === 2 && !$canUseRestaurant) {
                    if ($canUseSalade) $formuleType = 1;
                    elseif ($canUseMess) $formuleType = 3;
                    else continue;
                } elseif ($formuleType === 3 && !$canUseMess) {
                    if ($canUseSalade) $formuleType = 1;
                    elseif ($canUseRestaurant) $formuleType = 2;
                    else continue;
                }

                if ($formuleType === 1 && $canUseSalade) {
                    // Réservation salade
                    $salade = $salades[array_rand($salades)];
                    $lieu = $lieux[array_rand($lieux)];

                    $reservation = new Reservation();
                    $reservation->setUser($user)
                               ->setCarteDuJour($carte)
                               ->setFormule($formuleSalade)
                               ->setSalade($salade)
                               ->setLieu($lieu)
                               ->setStatutCommande(rand(0, 1) === 0 ? $statutPending : $statutConfirmed)
                               ->setPrice($carte->getPrice())
                               ->setDate($carte->getDate());
                    
                    $this->em->persist($reservation);
                    $reservationsCreated++;

                } elseif ($formuleType === 2 && $canUseRestaurant) {
                    // Réservation restaurant
                    $entree = $entrees[array_rand($entrees)];
                    $plat = $plats[array_rand($plats)];
                    $accompagnement = $accompagnements[array_rand($accompagnements)];
                    $lieu = $lieux[array_rand($lieux)];

                    $reservation = new Reservation();
                    $reservation->setUser($user)
                               ->setCarteDuJour($carte)
                               ->setFormule($formuleRestaurant)
                               ->setEntree($entree)
                               ->setPlat($plat)
                               ->setAccompagnement($accompagnement)
                               ->setLieu($lieu)
                               ->setStatutCommande(rand(0, 1) === 0 ? $statutPending : $statutConfirmed)
                               ->setPrice($carte->getPrice())
                               ->setDate($carte->getDate());
                    
                    $this->em->persist($reservation);
                    $reservationsCreated++;

                } elseif ($formuleType === 3 && $canUseMess) {
                    // Demande Mess
                    $messRequest = new MessRequest();
                    $messRequest->setUser($user)
                               ->setDate($carte->getDate())
                               ->setNombreConvives(rand(5, 50))
                               ->setPetitDejeuner(rand(0, 1) === 1)
                               ->setDejeuner(rand(0, 1) === 1)
                               ->setPauses(rand(0, 1) === 1)
                               ->setDiner(rand(0, 1) === 1);
                    
                    if (rand(0, 1) === 1) {
                        $messRequest->setCommentaires('Demande de mess pour ' . $messRequest->getNombreConvives() . ' personnes');
                    }
                    
                    $this->em->persist($messRequest);
                    $messRequestsCreated++;
                }
            }
        }

        $this->em->flush();

        $io->success([
            "Données fake créées avec succès !",
            "Utilisateurs: {$nbUsers}",
            "Réservations: {$reservationsCreated}",
            "Demandes Mess: {$messRequestsCreated}"
        ]);

        return Command::SUCCESS;
    }

    private function createStatut(string $name): StatutCommande
    {
        $statut = new StatutCommande();
        $statut->setName($name);
        $this->em->persist($statut);
        $this->em->flush();
        return $statut;
    }
}

