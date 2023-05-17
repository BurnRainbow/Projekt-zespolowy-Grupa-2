<?php

namespace App\Controller;
Use App\Entity\User;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainGameController extends AbstractController
{
    #[Route('/api/main_game', name: 'main_game')]
    public function index(): Response
    {
        $dostepdobazy = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('main_game/index.html.twig', [
            'controller_name' => 'MainGameController',
            'bazadanych' => $dostepdobazy,
        ]);
    }
}
