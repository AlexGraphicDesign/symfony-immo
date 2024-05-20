<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Auth extends AbstractController
{
    #[Route('/login', name: 'app_user_login')]
    public function __invoke(Request $request): Response
    {
        return $this->render('app.html.twig');
    }
}
