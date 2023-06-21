<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DokumentacjaController extends AbstractController
{
    #[Route('/dokumentacja', name: 'app_dokumentacja')]
    public function index(): Response
    {
        return $this->render('dokumentacja/index.html.twig', [
		'controller_name' => 'DokumentacjaController',
        ]);
    }
}
