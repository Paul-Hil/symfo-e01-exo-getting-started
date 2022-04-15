<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BirdController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('Bird/index.html.twig');

    }

    /**
     * @Route("/bird/{id}")
     */
    public function bird()
    {
        return $this->render('Bird/bird.html.twig');

    }
}