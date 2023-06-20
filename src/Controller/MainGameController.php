<?php

namespace App\Controller;
Use App\Entity\User;
Use App\Entity\HistoriaGier;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainGameController extends AbstractController
{
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

    #[Route('/api/main_game/update/{wygrane}/{przegrane}/{remis}', name: 'main_game_update')]
    public function update(UserInterface $usr, EntityManagerInterface $em, $wygrane, $przegrane, $remis): Response
    {
        /**
       * @var User $user
       */

        $rep = $em->getRepository(User::class);

        $user = $usr;
        dump($user->getId());

        $encja = $rep -> find($user);
        $encja -> setWygrane($wygrane);
        $encja -> setPrzegrane($przegrane);
        $encja -> setRemisy($remis);

        $em -> flush();

        $dostepdobazy = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $user]);
        $dostepdohistrii = $this->getDoctrine()->getRepository(HistoriaGier::class)->findBy(['id' => $user]);
        
        return $this->render('main_game/index.html.twig', [
            'controller_name' => 'MainGameController',
            'bazadanych' => $dostepdobazy,
            'historiagier' => $dostepdohistrii,
        ]);

        /** SAFEZONE */
    }
}
