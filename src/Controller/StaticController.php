<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StaticController extends AbstractController
{
    #[Route('/', name: 'app_static')]
    public function index(): Response
    {
        return $this->render('static/index.html.twig', [
            'name' => 'Ton Nom',
            'description' => 'Développeur Web Full Stack, en recherche d’alternance',
        ]);
    }
}
