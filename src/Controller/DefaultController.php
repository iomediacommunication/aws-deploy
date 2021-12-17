<?php

namespace App\Controller;

use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(TodoRepository $todoRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'todos' => $todoRepository->findAll()
        ]);
    }

    /**
     * @Route("/another-route/")
     */
    public function anotherRoute(): Response
    {
        return $this->render('default/another-route.html.twig');
    }
}
