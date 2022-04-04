<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="app_admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    // /**
    //  * @Route("/users", name="users")
    //  */
    // public function usersList(UserRepository $users)
    // {
    //     return $this->render('admin/users.html.twig', [
    //         'users' => $users->findAll(),
    //     ]);
    // }
}
