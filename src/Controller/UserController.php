<?php

namespace App\Controller;

use App\Entity\Friendship;
use App\Form\UserProfileType;
use Doctrine\ORM\EntityManagerInterface;
use \App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;


class UserController extends AbstractController
{
    #[Route('/user/{id}', name: 'user_profile')]
    public function userProfile($id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('utilisateur non trouvé');
        }

        return $this->render('user/profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/user', name: 'main_profile')]
    public function mainProfile(UserInterface $user): Response
    {
        return $this->render('user/profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/user/{id}/edit', name: 'edit_profile')]
    public function editProfile(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $form = $this->createForm(UserProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('user_profile', ['id' => $user->getId()]);
        }

        return $this->render('user/editProfile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    // ...

    #[Route('/user/{id}/add-friend', name: 'add_friend')]
    public function addFriend(EntityManagerInterface $entityManager, $id): Response
    {
        $user = $this->getUser();
        $friend = $entityManager->getRepository(User::class)->find($id);

        if (!$user || !$friend) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
        if (!$user->isFriendWith($friend)) {
            $friendship = new Friendship();
            $friendship->setCreatedAt(new \DateTimeImmutable());
            $friendship->setUser1($user);
            $friendship->setUser2($friend);

            $user->addFriendship1($friendship);
            $friend->addFriendships2($friendship);

            $entityManager->persist($friendship);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_profile', ['id' => $friend->getId()]);
    }

    #[Route('/user/{id}/toggle-friend', name: 'toggle_friend')]
    public function toggleFriend(EntityManagerInterface $entityManager, $id): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $currentUser = $this->getUser();

        if ($currentUser->isFriendWith($user)) {
            $currentUser->removeFriend($user);
        } else {
            $currentUser->addFriend($user);
        }

        $entityManager->flush();

        return $this->redirectToRoute('user_profile', ['id' => $user->getId()]);
    }

}
