<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class VanylController extends AbstractController
{
    #[Route('/', name: 'app_vanyl')]
    public function index(): Response
    {
        return new Response('vanil!!');
    }

    #[Route('/browse/{slug?}', name: 'app_browse')]
    public function browse($slug = null): Response
    {
        !$slug ? $slug = 'lox' : $slug = str_replace('-', ' ', $slug);

        return new Response('Brack vanil '.$slug);
    }
}
