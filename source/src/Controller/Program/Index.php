<?php

namespace App\Controller\Program;

use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Index extends AbstractController
{
    public function __construct(
        private readonly ProgramRepository $programRepository
    )
    {   
    }

    #[Route(path: '/programmes-immobiliers-neufs', name: 'app_program.index')]
    public function __invoke(Request $request): Response
    {
        $programs = $this->programRepository->findAll();

        return $this->render('program/index.html.twig', [
            'programs' => $programs,
        ]);
    }
}
