<?php

namespace App\Controller;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'app_menu')]
    public function index(Request $request): Response
    {
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }

    #[Route('/menu/save', name: 'app_menu_save')]
    public function save(Request $request, EntityManagerInterface $entityManager, OrderRepository $orderRepository, SessionInterface $session): Response
    {
        $commandes = $request->query->get("hidden-data");
        $commandes = json_decode($commandes);
        $user = $this->getUser();

        if($commandes){
            
            foreach ($commandes as $key => $commande) {
                $order = new Order;

                $order->setRelationUser($user);
                $order->setOrderNum(2147483647);
                $order->setPain($commande->pain);
                $order->setViande($commande->viande);
                $order->setSauce($commande->sauce);
                $order->setFrites($commande->frites);
                $order->setBoisson($commande->boisson);

                $entityManager->persist($order);
                $entityManager->flush();

            }
            $orders = $orderRepository->findByOrderNum(2147483647);
            $idFirstOrder = $orders[0]->getId();
            foreach ($orders as $key => $order) {
                $order->setOrderNum($idFirstOrder);

                $entityManager->persist($order);
                $entityManager->flush();
            }

            $session->set("orders", $orders);
            $session->set("ending", true);
            
            return $this->redirectToRoute("app_home");
        }


        return $this->redirectToRoute("app_home");
    }
}
