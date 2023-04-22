<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainGameController extends AbstractController
{
    #[Route('/main_game', name: 'main_game')]
    public function index(): Response
    {
        return $this->render('main_game/index.html.twig', [
            'controller_name' => 'MainGameController',
        ]);
    }
}
