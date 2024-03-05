<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Tweet;
use App\Entity\View;
use App\Repository\TweetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TweetController extends AbstractController
{
    #[Route('/tweet/{id}/like', name: 'tweet_like')]
    public function likeTweet(EntityManagerInterface $entityManager, $id): Response
    {
        $user = $this->getUser();
        $tweet = $entityManager->getRepository(Tweet::class)->find($id);

        if (!$user || !$tweet) {
            throw $this->createNotFoundException('Utilisateur ou tweet non trouvé');
        }

        $like = new Like();
        $like->setUser($user);
        $like->setTweet($tweet);
        $like->setCreatedAt(new \DateTimeImmutable());
        $tweet->addLike($like);

        $entityManager->persist($like);
        $entityManager->flush();

        return $this->redirectToRoute('tweet_show', ['id' => $tweet->getId()]);
    }

    #[Route('/tweet/{id}/unlike', name: 'tweet_unlike')]
    public function unlikeTweet(EntityManagerInterface $entityManager, $id): Response
    {
        $user = $this->getUser();
        $tweet = $entityManager->getRepository(Tweet::class)->find($id);

        if (!$user || !$tweet) {
            throw $this->createNotFoundException('Utilisateur ou tweet non trouvé');
        }

        $like = $entityManager->getRepository(Like::class)->findOneBy(['user' => $user, 'tweet' => $tweet]);

        if ($like) {
            $entityManager->remove($like);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tweet_show', ['id' => $tweet->getId()]);
    }

    #[Route('/tweet/{id}', name: 'app_tweet')]
    public function one(TweetRepository $tweetRepository, $id, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tweet = $entityManager->getRepository(Tweet::class)->find($id);

        if (!$user || !$tweet) {
            throw $this->createNotFoundException('Utilisateur ou tweet non trouvé');
        }

        $view = new View();
        $view->setUser($user);
        $view->setTweet($tweet);
        $view->setCreatedAt(new \DateTimeImmutable());


        $tweet->addView($view);

        $entityManager->persist($view);
        $entityManager->flush();
        $tweet = $tweetRepository->find($id);
        return $this->render('tweet/one.html.twig', [
            'tweet' => $tweet,
        ]);
    }
}
