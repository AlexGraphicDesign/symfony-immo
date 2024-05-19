<?php

namespace App\Controller\Program;

use App\Repository\ProgramRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Index extends AbstractController
{
    #[Route('/programmes-immobiliers-neufs', name: 'app_program_index')]
    public function __invoke(Request $request, ProgramRepository $repository): Response
    {
        $programs = $repository->findAll();

        return $this->render('program/index.html.twig', [
            'programs' => $programs,
        ]);
    }
}
