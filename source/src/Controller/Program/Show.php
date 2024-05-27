<?php

namespace App\Controller\Program;

use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Show extends AbstractController
{
    #[Route(path: '/programmes-immobiliers-neufs/{slug}', requirements: ['slug' => '[a-z0-9-]+'], name: 'app_program.show')]
    public function __invoke(Request $request, string $slug, ProgramRepository $programRepository): Response
    {
        $program = $programRepository->findOneBy(['slug' => $slug]);
        
        return $this->render('program/show.html.twig', [
            'program' => $program,
        ]);
    }
}
