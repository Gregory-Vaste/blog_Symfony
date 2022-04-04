<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PostsRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(PostsRepository $postsRepository, Request $request): Response
    {
        //return random
        $posts = $postsRepository->findAll();
        shuffle($posts);
        return $this->render('home/index.html.twig', [
            'posts' => array_slice($posts, 0, 6)
        ]);
    }
}
