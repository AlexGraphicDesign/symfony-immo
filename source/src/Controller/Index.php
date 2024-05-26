<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Index extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function __invoke(Request $request): Response
    {
        return $this->render('base.html.twig');
    }
}
