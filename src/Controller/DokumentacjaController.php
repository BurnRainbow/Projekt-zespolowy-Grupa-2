<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DokumentacjaController extends AbstractController
{
    #[Route('/dokumentacja', name: 'app_dokumentacja')]
    public function index(): Response
    {
	$response = new BinaryFileResponse('przypadki_uzycia.txt');
	$response = setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT,'przypadki_uzycia.txt');
        return $this->render('dokumentacja/index.html.twig', [
		'controller_name' => 'DokumentacjaController',
		$response
        ]);
    }
}
