<?php

namespace App\Controller;

use App\Entity\Tweet;
use App\Entity\User;
use App\Repository\TweetRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class HomeController extends AbstractController
{
    private $tweetRepository;

    public function __construct(TweetRepository $tweetRepository)
    {
        $this->tweetRepository = $tweetRepository;
    }

    #[Route('/tweet/create', name: 'create_tweet')]
    public function createTweet(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response
    {
        $content = $request->request->get('tweet_content');
        $title = $request->request->get('tweet_title');
        $user = $this->getUser();
        $tweet = new Tweet();
        $tweet->setMessage($content);
        $tweet->setTitle($title);
        $tweet->setCreatedAt(new \DateTimeImmutable());
        $tweet->setUser($user);
        $entityManager->persist($tweet);
        $entityManager->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/search', name: 'user_search')]
    public function searchUsers(Request $request, UserRepository $userRepository): Response
    {
        $query = $request->query->get('q');
        $users = $userRepository->searchUsers($query);

        return $this->render('search/results.html.twig', [
            'users' => $users,
            'query' => $query,
        ]);
    }

    #[Route('', name: 'app_home')]
    public function index(): Response
    {
        $lastTweets = $this->tweetRepository->findLastTweetsWithAuthors();

        return $this->render('home/index.html.twig', [
            'last_tweets' => $lastTweets,
        ]);
    }
}
