<?php
declare(strict_types=1);

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-test-users',
    description: 'Crée les utilisateurs de test (admin et salarié)'
)]
final class CreateTestUsersCommand extends Command
{
    public function __construct(
        private readonly EntityManagerInterface $em,
        private readonly UserPasswordHasherInterface $hasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Créer l'utilisateur Admin/Chef
        $adminEmail = 'admin@test.com';
        $admin = $this->em->getRepository(User::class)->findOneBy(['email' => $adminEmail]);
        
        if (!$admin) {
            $admin = new User();
            $admin->setEmail($adminEmail)
                ->setName('Chef Admin')
                ->setRoles(['ROLE_CHEF'])
                ->setAdminVerif(true)
                ->setCompteVerif(true)
                ->setBalance('0.00');
            $admin->setPassword($this->hasher->hashPassword($admin, 'Admin123!'));
            $this->em->persist($admin);
            $io->success("Utilisateur admin créé : {$adminEmail} / Admin123!");
        } else {
            $io->warning("L'utilisateur admin existe déjà : {$adminEmail}");
        }

        // Créer l'utilisateur Salarié
        $userEmail = 'user@test.com';
        $user = $this->em->getRepository(User::class)->findOneBy(['email' => $userEmail]);
        
        if (!$user) {
            $user = new User();
            $user->setEmail($userEmail)
                ->setName('Salarié Test')
                ->setRoles(['ROLE_EMPLOYEE'])
                ->setCompteVerif(true)
                ->setAdminVerif(false)
                ->setBalance('50.00');
            $user->setPassword($this->hasher->hashPassword($user, 'User123!'));
            $this->em->persist($user);
            $io->success("Utilisateur salarié créé : {$userEmail} / User123! (solde: 50€)");
        } else {
            $io->warning("L'utilisateur salarié existe déjà : {$userEmail}");
        }

        $this->em->flush();

        $io->success('Utilisateurs de test créés avec succès !');
        $io->table(
            ['Email', 'Rôle', 'Mot de passe', 'Solde'],
            [
                [$adminEmail, 'ROLE_CHEF', 'Admin123!', '0.00€'],
                [$userEmail, 'ROLE_EMPLOYEE', 'User123!', '50.00€'],
            ]
        );

        return Command::SUCCESS;
    }
}

