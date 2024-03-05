<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationStepOneType;
use App\Form\RegistrationStepTwoType;
use App\Repository\UserRepository;
use App\Security\LoginFormAuthAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class SecurityController extends AbstractController
{

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/register/step-one', name: 'registration_step_one')]
    public function stepOne(
        Request $request,
        UserPasswordHasherInterface $passwordEncoder,
        SessionInterface $session
    ): Response
    {
        $userData = $session->get('registration_data', []);

        $user = new User();
        $user->setPassword('');

        $form = $this->createForm(RegistrationStepOneType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordEncoder->hashPassword($user, $user->getPassword());

            $userData['email'] = $user->getEmail();
            $userData['password'] = $hashedPassword;

            $session->set('registration_data', $userData);

            return $this->redirectToRoute('registration_step_two');
        }

        return $this->render('security/step1.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/register/step-two', name: 'registration_step_two')]
    public function stepTwo(
        Request $request,
        UserPasswordHasherInterface $passwordEncoder,
        SessionInterface $session,
        EntityManagerInterface $entityManager
    ): Response
    {
        $userData = $session->get('registration_data', []);

        if (!$userData) {
            return $this->redirectToRoute('registration_step1');
        }

        $form = $this->createForm(RegistrationStepTwoType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userData['username'] = $form->get('username')->getData();
            $session->set('registration_data', $userData);

            return $this->redirectToRoute('registration_confirmation');
        }

        return $this->render('security/step2.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/register/confirmation', name: 'registration_confirmation')]
    public function confirmation(
        SessionInterface $session,
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        UserAuthenticatorInterface $userAuthenticator,
        LoginFormAuthAuthenticator $authenticator,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
    ): Response
    {
        $userData = $session->get('registration_data', []);
        $emailExists = $userRepository->findOneBy(['email' => $userData['email']]);
        if ($emailExists) {
            return $this->redirectToRoute('registration_step_one');
        }

        $user = new User();
        $user->setEmail($userData['email']);
        $user->setUsername($userData['username']);
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $userData['password']
            )
        );
        $user->setRoles(['ROLE_USER']);

        $entityManager->persist($user);
        $entityManager->flush();

        $session->remove('registration_data');

        return $userAuthenticator->authenticateUser(
            $user,
            $authenticator,
            $request
        );
    }

}
