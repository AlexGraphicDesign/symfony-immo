<?php

namespace App\Controller\Program;

use App\Entity\Program;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Show extends AbstractController
{
    #[Route(path: '/programmes-immobiliers-neufs/{slug}', requirements: ['slug' => '[a-z0-9-]+'], name: 'app_program.show')]
    public function __invoke(Program $program): Response
    {
        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }
}
