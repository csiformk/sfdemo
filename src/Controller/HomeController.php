<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public $users = [
        [
            'nom' => 'Jon Doe',
            'email' => 'jodo@gmail.com',
            'age' => 23
        ],
        [
            'nom' => 'Jane Doue',
            'email' => 'jadou@gmail.com',
            'age' => 42
        ],
    ];

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        //dd($this->users);

        return $this->render('home/index.html.twig', [
            'titre' => 'Titre : Demo Symfony',
            'nom' => 'Jon Doe',
            'users' => $this->users
        ]);
    }
}
