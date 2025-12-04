<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\CarteDuJour;
use App\Entity\MessRequest;
use App\Entity\Reservation;
use App\Entity\StatutCommande;
use App\Entity\Wallet;
use App\Repository\CarteDuJourRepository;
use App\Repository\MessRequestRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[IsGranted('ROLE_EMPLOYEE')]
final class EmployeeController extends AbstractController
{
    #[Route('/employee/dashboard', name: 'employee_dashboard')]
    public function dashboard(CarteDuJourRepository $carteRepo, ReservationRepository $reservationRepo, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $today = new \DateTime('today');
        $endDate = (clone $today)->modify('+60 days');
        
        $menus = $carteRepo->findByDateRange($today, $endDate);
        
        // Récupérer les réservations de l'utilisateur
        $reservations = $reservationRepo->findByUser($user);
        $reservedDates = [];
        foreach ($reservations as $reservation) {
            $reservedDates[] = $reservation->getDate()->format('Y-m-d');
        }
        
        // Créer un tableau associatif date => menu avec entrées, plats et accompagnements
        $menusByDate = [];
        foreach ($menus as $menu) {
            $dateKey = $menu->getDate()->format('Y-m-d');
            
            // Récupérer les entrées, plats et accompagnements pour ce menu
            $entrees = [];
            $plats = [];
            $accompagnements = [];
            
            foreach ($menu->getCompositionEntrees() as $compEntree) {
                $entrees[] = $compEntree->getEntree();
            }
            
            foreach ($menu->getCompositionPlats() as $compPlat) {
                $plats[] = $compPlat->getPlat();
            }
            
            foreach ($menu->getCompositionAccompagnements() as $compAccomp) {
                $accompagnements[] = $compAccomp->getAccompagnement();
            }
            
            $menusByDate[$dateKey] = [
                'menu' => $menu,
                'entrees' => $entrees,
                'plats' => $plats,
                'accompagnements' => $accompagnements,
            ];
        }

        return $this->render('employee/dashboard.html.twig', [
            'menusByDate' => $menusByDate,
            'today' => $today,
            'endDate' => $endDate,
            'balance' => $user->getBalanceFloat(),
            'reservedDates' => $reservedDates,
        ]);
    }

    #[Route('/employee/credit', name: 'employee_credit', methods: ['GET', 'POST'])]
    public function credit(Request $request, EntityManagerInterface $em): Response
    {
        if ($request->isMethod('POST')) {
            $amount = (float) $request->request->get('amount', 0);
            
            if ($amount < 1 || $amount > 1000) {
                $this->addFlash('danger', 'Le montant doit être entre 1€ et 1000€.');
                return $this->render('employee/credit.html.twig');
            }

            $user = $this->getUser();
            $oldBalance = (float) $user->getBalance();
            $newBalance = $oldBalance + $amount;

            // Créer transaction Wallet
            $wallet = new Wallet();
            $wallet->setUser($user)
                ->setType('credit')
                ->setAmount((string) $amount)
                ->setSoldeOld((string) $oldBalance)
                ->setSoldeNew((string) $newBalance)
                ->setStatut('payement accepté')
                ->setDescription('Recharge de compte');

            $user->setBalance((string) $newBalance);

            $em->persist($wallet);
            $em->flush();

            $this->addFlash('success', "Votre compte a été crédité de {$amount}€. Nouveau solde : {$newBalance}€");
            return $this->redirectToRoute('employee_dashboard');
        }

        return $this->render('employee/credit.html.twig', [
            'balance' => $this->getUser()->getBalanceFloat(),
        ]);
    }

    #[Route('/employee/reserve/{date}', name: 'employee_reserve', methods: ['GET', 'POST'])]
    public function reserve(string $date, Request $request, CarteDuJourRepository $carteRepo, ReservationRepository $reservationRepo, MessRequestRepository $messRequestRepo, MailerInterface $mailer, EntityManagerInterface $em): Response
    {
        try {
            $dateObj = new \DateTime($date);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Date invalide.');
            return $this->redirectToRoute('employee_dashboard');
        }

        $carteDuJour = $carteRepo->findOneBy(['date' => $dateObj]);
        
        if (!$carteDuJour || !$carteDuJour->isAvailable()) {
            $this->addFlash('danger', 'Menu non disponible pour cette date.');
            return $this->redirectToRoute('employee_dashboard');
        }

        $user = $this->getUser();
        
        // Vérifier si une réservation existe déjà pour ce jour
        $existingReservation = $reservationRepo->findOneBy([
            'user' => $user,
            'date' => $dateObj,
        ]);

        // Récupérer les formules actives pour ce jour
        // Toutes les formules dans CompositionFormule sont considérées comme actives
        $formulesActives = [];
        foreach ($carteDuJour->getCompositionFormules() as $compFormule) {
            $formulesActives[] = $compFormule->getFormule();
        }

        // Récupérer les lieux actifs pour ce jour
        $lieusActifs = [];
        foreach ($carteDuJour->getCompositionLieus() as $compLieu) {
            if ($compLieu->isActive()) {
                $lieusActifs[] = $compLieu->getLieu();
            }
        }

        // Récupérer les entrées, plats, accompagnements et salades disponibles
        $entrees = [];
        $plats = [];
        $accompagnements = [];
        $salades = [];

        foreach ($carteDuJour->getCompositionEntrees() as $compEntree) {
            $entrees[] = $compEntree->getEntree();
        }

        foreach ($carteDuJour->getCompositionPlats() as $compPlat) {
            $plats[] = $compPlat->getPlat();
        }

        foreach ($carteDuJour->getCompositionAccompagnements() as $compAccomp) {
            $accompagnements[] = $compAccomp->getAccompagnement();
        }

        foreach ($carteDuJour->getCompositionSalades() as $compSalade) {
            $salades[] = $compSalade->getSalade();
        }

        // Vérifier si une demande Mess a déjà été envoyée pour ce jour
        $existingMessRequest = $messRequestRepo->findOneByUserAndDate($user, $dateObj);

        // Gérer la soumission du formulaire Mess
        if ($request->isMethod('POST') && $request->request->get('mess_form') === '1') {
            $nombreConvives = $request->request->get('nombre_convives');
            $petitDejeuner = $request->request->has('petit_dejeuner');
            $dejeuner = $request->request->has('dejeuner');
            $pauses = $request->request->has('pauses');
            $diner = $request->request->has('diner');
            $commentaires = $request->request->get('commentaires', '');

            if ($existingMessRequest) {
                $this->addFlash('warning', 'Un message a déjà été envoyé pour ce jour.');
                return $this->redirectToRoute('employee_reserve', ['date' => $date]);
            }

            try {
                // Créer la demande Mess
                $messRequest = new MessRequest();
                $messRequest->setUser($user)
                    ->setDate($dateObj)
                    ->setNombreConvives($nombreConvives ? (int) $nombreConvives : null)
                    ->setPetitDejeuner($petitDejeuner)
                    ->setDejeuner($dejeuner)
                    ->setPauses($pauses)
                    ->setDiner($diner)
                    ->setCommentaires($commentaires ?: null);

                $em->persist($messRequest);
                $em->flush();

                // Construire le message email
                $repas = [];
                if ($petitDejeuner) $repas[] = 'Petit déjeuner';
                if ($dejeuner) $repas[] = 'Déjeuner';
                if ($pauses) $repas[] = 'Pauses';
                if ($diner) $repas[] = 'Diner';

                $messageBody = "Demande de réservation pour un mess\n\n";
                $messageBody .= "Demandeur : {$user->getName()} ({$user->getEmail()})\n";
                $messageBody .= "Date souhaitée : {$dateObj->format('d/m/Y')}\n";
                if ($nombreConvives) {
                    $messageBody .= "Nombre de convives : {$nombreConvives}\n";
                }
                if (!empty($repas)) {
                    $messageBody .= "Repas demandés : " . implode(', ', $repas) . "\n";
                }
                if ($commentaires) {
                    $messageBody .= "\nCommentaires :\n{$commentaires}\n";
                }

                // Envoyer l'email
                $email = (new Email())
                    ->from($user->getEmail())
                    ->to('restaurant@desangosse.com')
                    ->cc($user->getEmail())
                    ->subject('Demande de réservation pour un mess')
                    ->text($messageBody);

                $mailer->send($email);
                $this->addFlash('success', 'Votre demande a été envoyée par email.');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de l\'envoi de l\'email.');
            }

            return $this->redirectToRoute('employee_reserve', ['date' => $date]);
        }

        return $this->render('employee/reserve.html.twig', [
            'carteDuJour' => $carteDuJour,
            'date' => $dateObj,
            'formulesActives' => $formulesActives,
            'lieusActifs' => $lieusActifs,
            'entrees' => $entrees,
            'plats' => $plats,
            'accompagnements' => $accompagnements,
            'salades' => $salades,
            'hasReservation' => $existingReservation !== null,
            'reservation' => $existingReservation,
            'hasMessRequest' => $existingMessRequest !== null,
            'messRequest' => $existingMessRequest,
        ]);
    }

    #[Route('/employee/reserve', name: 'employee_reserve_post', methods: ['POST'])]
    public function reservePost(Request $request, EntityManagerInterface $em, CarteDuJourRepository $carteRepo, ReservationRepository $reservationRepo): Response
    {
        $user = $this->getUser();
        $dateStr = $request->request->get('date');
        $formuleId = (int) $request->request->get('formule');
        $lieuId = (int) $request->request->get('lieu');

        try {
            $dateObj = new \DateTime($dateStr);
        } catch (\Exception $e) {
            $this->addFlash('danger', 'Date invalide.');
            return $this->redirectToRoute('employee_dashboard');
        }

        $carteDuJour = $carteRepo->findOneBy(['date' => $dateObj]);
        
        if (!$carteDuJour || !$carteDuJour->isAvailable()) {
            $this->addFlash('danger', 'Menu non disponible.');
            return $this->redirectToRoute('employee_dashboard');
        }

        // Vérifier le solde
        if ($user->getBalanceFloat() < (float) $carteDuJour->getPrice()) {
            $this->addFlash('danger', 'Solde insuffisant. Veuillez créditer votre compte.');
            return $this->redirectToRoute('employee_credit');
        }

        // Récupérer les entités
        $formuleRepo = $em->getRepository(\App\Entity\Formule::class);
        $lieuRepo = $em->getRepository(\App\Entity\Lieu::class);
        $statutRepo = $em->getRepository(\App\Entity\StatutCommande::class);
        
        $formule = $formuleRepo->find($formuleId);
        $lieu = $lieuRepo->find($lieuId);
        $statutPending = $statutRepo->findOneBy(['name' => 'pending']) ?? $this->createStatutIfNotExists($em, 'pending');

        if (!$formule || !$lieu) {
            $this->addFlash('danger', 'Données invalides.');
            return $this->redirectToRoute('employee_dashboard');
        }

        // Vérifier si réservation existe déjà
        $existingReservation = $reservationRepo->findOneBy([
            'user' => $user,
            'date' => $dateObj,
        ]);

        if ($existingReservation) {
            $this->addFlash('warning', 'Vous avez déjà une réservation pour cette date.');
            return $this->redirectToRoute('employee_dashboard');
        }

        // Créer la réservation
        $reservation = new Reservation();
        $reservation->setUser($user)
            ->setCarteDuJour($carteDuJour)
            ->setFormule($formule)
            ->setLieu($lieu)
            ->setStatutCommande($statutPending)
            ->setDate($dateObj)
            ->setPrice($carteDuJour->getPrice());

        // Si formule salade
        if ($formule->getName() === 'salade') {
            $saladeId = (int) $request->request->get('salade');
            $saladeRepo = $em->getRepository(\App\Entity\Salade::class);
            $salade = $saladeRepo->find($saladeId);
            if ($salade) {
                $reservation->setSalade($salade);
            }
        } else {
            // Menu complet
            $entreeId = (int) $request->request->get('entree');
            $platId = (int) $request->request->get('plat');
            $accompagnementId = (int) $request->request->get('accompagnement');
            $dessertId = (int) $request->request->get('dessert');

            $entreeRepo = $em->getRepository(\App\Entity\Entree::class);
            $platRepo = $em->getRepository(\App\Entity\Plat::class);
            $accompagnementRepo = $em->getRepository(\App\Entity\Accompagnement::class);
            $dessertRepo = $em->getRepository(\App\Entity\Dessert::class);

            if ($entreeId) {
                $reservation->setEntree($entreeRepo->find($entreeId));
            }
            if ($platId) {
                $reservation->setPlat($platRepo->find($platId));
            }
            if ($accompagnementId) {
                $reservation->setAccompagnement($accompagnementRepo->find($accompagnementId));
            }
            if ($dessertId) {
                $reservation->setDessert($dessertRepo->find($dessertId));
            }
        }

        // Débiter le compte
        $oldBalance = (float) $user->getBalance();
        $newBalance = $oldBalance - (float) $carteDuJour->getPrice();

        $wallet = new Wallet();
        $wallet->setUser($user)
            ->setType('debit')
            ->setAmount('-' . $carteDuJour->getPrice())
            ->setSoldeOld((string) $oldBalance)
            ->setSoldeNew((string) $newBalance)
            ->setStatut('payement accepté')
            ->setDescription('Réservation menu du ' . $dateObj->format('d/m/Y'));

        $user->setBalance((string) $newBalance);

        $em->persist($reservation);
        $em->persist($wallet);
        $em->flush();

        $this->addFlash('success', 'Réservation effectuée avec succès !');
        return $this->redirectToRoute('employee_dashboard');
    }

    #[Route('/employee/reservation/{id}/cancel', name: 'employee_reservation_cancel', methods: ['POST'])]
    public function cancelReservation(int $id, EntityManagerInterface $em, ReservationRepository $reservationRepo): Response
    {
        $user = $this->getUser();
        $reservation = $reservationRepo->find($id);

        if (!$reservation || $reservation->getUser() !== $user) {
            $this->addFlash('danger', 'Réservation introuvable.');
            return $this->redirectToRoute('employee_reservations');
        }

        $statutName = $reservation->getStatutCommande()->getName();
        if (!in_array($statutName, ['pending', 'confirmed'], true)) {
            $this->addFlash('danger', 'Cette réservation ne peut plus être annulée.');
            return $this->redirectToRoute('employee_reservations');
        }

        // Rembourser
        $oldBalance = (float) $user->getBalance();
        $newBalance = $oldBalance + (float) $reservation->getPrice();

        $wallet = new Wallet();
        $wallet->setUser($user)
            ->setType('refund')
            ->setAmount($reservation->getPrice())
            ->setSoldeOld((string) $oldBalance)
            ->setSoldeNew((string) $newBalance)
            ->setStatut('payement accepté')
            ->setDescription('Remboursement réservation #' . $reservation->getId());

        $user->setBalance((string) $newBalance);

        $statutRepo = $em->getRepository(\App\Entity\StatutCommande::class);
        $statutCancelled = $statutRepo->findOneBy(['name' => 'cancelled']) ?? $this->createStatutIfNotExists($em, 'cancelled');
        $reservation->setStatutCommande($statutCancelled);

        $em->persist($wallet);
        $em->flush();

        $this->addFlash('success', 'Réservation annulée et remboursée.');
        return $this->redirectToRoute('employee_reservations');
    }

    #[Route('/employee/reservations', name: 'employee_reservations')]
    public function reservations(ReservationRepository $reservationRepo): Response
    {
        $user = $this->getUser();
        $reservations = $reservationRepo->findByUser($user);

        return $this->render('employee/reservations.html.twig', [
            'reservations' => $reservations,
            'balance' => $user->getBalance(),
        ]);
    }

    #[Route('/employee/meal-details/{id}', name: 'employee_meal_details', methods: ['GET'])]
    public function mealDetails(int $id, Request $request): Response
    {
        $type = $request->query->get('type'); // 'entree', 'plat', 'accompagnement', 'dessert', 'salade'
        
        // Cette méthode sera appelée en AJAX pour afficher les détails
        // Pour l'instant, retour simple
        return new Response('Détails du plat', 200);
    }

    #[Route('/employee/mess', name: 'employee_mess', methods: ['GET', 'POST'])]
    public function mess(Request $request, MailerInterface $mailer): Response
    {
        if ($request->isMethod('POST')) {
            $message = $request->request->get('message', '');
            $dateSouhaitee = $request->request->get('date_souhaitee', '');

            if (empty($message)) {
                $this->addFlash('danger', 'Le message est requis.');
                return $this->render('employee/mess.html.twig');
            }

            $user = $this->getUser();
            
            try {
                $email = (new Email())
                    ->from($user->getEmail())
                    ->to('restaurant@desangosse.com')
                    ->cc($user->getEmail())
                    ->subject('Demande de réservation pour un mess')
                    ->text("Message de {$user->getName()} ({$user->getEmail()})\n\nDate souhaitée : {$dateSouhaitee}\n\nMessage :\n{$message}");

                $mailer->send($email);
                $this->addFlash('success', 'Votre demande a été envoyée par email.');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Erreur lors de l\'envoi de l\'email.');
            }

            return $this->redirectToRoute('employee_dashboard');
        }

        return $this->render('employee/mess.html.twig');
    }

    #[Route('/employee/account', name: 'employee_account')]
    public function account(): Response
    {
        $user = $this->getUser();
        
        return $this->render('employee/account.html.twig', [
            'user' => $user,
            'balance' => $user->getBalanceFloat(),
        ]);
    }

    #[Route('/employee/account/credit', name: 'employee_account_credit', methods: ['POST'])]
    public function creditBalance(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $amount = $request->request->get('amount');
        
        if (!$amount || !is_numeric($amount) || $amount <= 0) {
            $this->addFlash('danger', 'Montant invalide.');
            return $this->redirectToRoute('employee_account');
        }
        
        $currentBalance = (float) $user->getBalance();
        $newBalance = $currentBalance + (float) $amount;
        $user->setBalance((string) number_format($newBalance, 2, '.', ''));
        
        $em->flush();
        
        $this->addFlash('success', 'Solde crédité de ' . number_format((float) $amount, 2, ',', ' ') . ' € avec succès.');
        
        return $this->redirectToRoute('employee_account');
    }

    #[Route('/employee/account/change-password', name: 'employee_account_change_password', methods: ['POST'])]
    public function changePassword(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $hasher): Response
    {
        $user = $this->getUser();
        $currentPassword = $request->request->get('current_password');
        $newPassword = $request->request->get('new_password');
        $confirmPassword = $request->request->get('confirm_password');
        
        // Vérifier le mot de passe actuel
        if (!$hasher->isPasswordValid($user, $currentPassword)) {
            $this->addFlash('danger', 'Mot de passe actuel incorrect.');
            return $this->redirectToRoute('employee_account');
        }
        
        // Vérifier que les nouveaux mots de passe correspondent
        if ($newPassword !== $confirmPassword) {
            $this->addFlash('danger', 'Les nouveaux mots de passe ne correspondent pas.');
            return $this->redirectToRoute('employee_account');
        }
        
        // Vérifier la longueur du nouveau mot de passe
        if (strlen($newPassword) < 8) {
            $this->addFlash('danger', 'Le nouveau mot de passe doit contenir au moins 8 caractères.');
            return $this->redirectToRoute('employee_account');
        }
        
        // Mettre à jour le mot de passe
        $user->setPassword($hasher->hashPassword($user, $newPassword));
        $em->flush();
        
        $this->addFlash('success', 'Mot de passe modifié avec succès.');
        
        return $this->redirectToRoute('employee_account');
    }

    private function createStatutIfNotExists(EntityManagerInterface $em, string $name): StatutCommande
    {
        $statut = new StatutCommande();
        $statut->setName($name);
        $em->persist($statut);
        $em->flush();
        return $statut;
    }
}

