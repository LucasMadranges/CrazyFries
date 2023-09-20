<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private $entityManager;
    private $userPasswordHasherInterface;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->entityManager = $entityManager;
        $this->userPasswordHasherInterface = $userPasswordHasherInterface;
    }


    #[Route('/register', name: 'app_register')]
    public function index(Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $emailExist = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());

            if($form->isSubmitted() && $form->isValid() && !$emailExist){
                $password = $this->userPasswordHasherInterface->hashPassword($user, $user->getPassword());
                $user->setPassword($password);
                $roles = ["ROLE_USER"];
                $user->setRoles($roles);

                    $this->entityManager->persist($user);
                    $this->entityManager->flush();

                    return $this->redirectToRoute("app_login");
            }
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
