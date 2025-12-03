<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function __invoke(): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Rediriger selon le rôle
        if (in_array('ROLE_CHEF', $user->getRoles(), true)) {
            return $this->redirectToRoute('chef_agenda');
        }
        
        if (in_array('ROLE_EMPLOYEE', $user->getRoles(), true)) {
            return $this->redirectToRoute('employee_dashboard');
        }

        return $this->render('app/home.html.twig');
    }
}

