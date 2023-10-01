<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SessionInterface $session): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        if ($session->get("ending")) {
            
            return $this->render('home/end.html.twig', [
                'orders' => $session->get("orders"),
                'ending' => $session->get("ending"),
            ]);
        }

        return $this->render('home/index.html.twig', []);
    }
}
