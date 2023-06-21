<?php

namespace App\Controller;
Use App\Entity\User;
Use App\Entity\HistoriaGier;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use DateTime;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainGameController extends AbstractController
{

    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    #[Route('/api/main_game', name: 'main_game')]
    public function index(UserInterface $usr): Response
    {
        /**
       * @var User $user
       */

        $user = $usr; 
        dump($user->getId());

        $dostepdobazy = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $user]);
        $dostepdohistrii = $this->getDoctrine()->getRepository(HistoriaGier::class)->findBy(['id' => $user]);
        
        return $this->render('main_game/index.html.twig', [
            'controller_name' => 'MainGameController',
            'bazadanych' => $dostepdobazy,
            'historiagier' => $dostepdohistrii,
        ]);

        
    }

    #[Route('/api/main_game/update/{wygrane}/{przegrane}/{remis}/{Status}', name: 'main_game_update')]
    public function update(UserInterface $usr, EntityManagerInterface $em, $wygrane, $przegrane, $remis, $Status): Response
    {
        /**
       * @var User $user
       */

       $currentDate = new DateTime();
       $formattedDate = $currentDate->format('Y-m-d H:i:s');

        $rep1 = $em->getRepository(User::class);
        $rep2 = new HistoriaGier();

        $user = $usr;
        dump($user->getId());

        $rep2 -> setUser($user); 
        $rep2 -> setWynikGry($Status);
        $rep2 -> setDataGry($currentDate);

        $encja1 = $rep1 -> find($user);
        $encja1 -> setWygrane($wygrane);
        $encja1 -> setPrzegrane($przegrane);
        $encja1 -> setRemisy($remis);

        $em->persist($rep2);
        $em -> flush();

        $dostepdobazy = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $user]);
        $dostepdohistrii = $this->getDoctrine()->getRepository(HistoriaGier::class)->findBy(['id' => $user]);
        
        return new RedirectResponse($this->urlGenerator->generate('main_game'));

        return $this->render('main_game/index.html.twig', [
            'controller_name' => 'MainGameController',
            'bazadanych' => $dostepdobazy,
            'historiagier' => $dostepdohistrii,
        ]);

        /** SAFEZONE */
    }
}


