<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register', methods: ['GET','POST'])]
    public function __invoke(
        Request $request,
        UserPasswordHasherInterface $hasher,
        EntityManagerInterface $em
    ): Response {
        if ($request->isMethod('GET')) {
            return $this->render('security/register.html.twig');
        }

        $email = (string) $request->request->get('email', '');
        $name = (string) $request->request->get('name', '');
        $plain = (string) $request->request->get('password', '');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($plain) < 8 || empty($name)) {
            $this->addFlash('danger', 'Email invalide, nom manquant ou mot de passe trop court (min 8).');
            return $this->render('security/register.html.twig', [
                'prefill_email' => $email,
                'prefill_name' => $name,
            ], new Response('', 400));
        }

        $user = (new User())
            ->setEmail($email)
            ->setName($name)
            ->setRoles(['ROLE_EMPLOYEE'])
            ->setCompteVerif(true);
        $user->setPassword($hasher->hashPassword($user, $plain));
        $em->persist($user); 
        $em->flush();

        return $this->redirectToRoute('app_login');
    }
}

