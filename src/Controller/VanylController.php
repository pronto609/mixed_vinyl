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
        $tracks = [];
        for ($i = 1; $i < 10; $i++) {
            $tracks[] = ['song' => 'song '.$i, 'artist' => 'artist '.$i];
        }
        return $this->render('vanyl/homepage.html.twig', [
            'title' => " PB & Jams",
            'tracks' => $tracks,
        ]);
    }

    #[Route('/browse/{slug?}', name: 'app_browse')]
    public function browse($slug = null): Response
    {
        !$slug ? $slug = 'lox' : $slug = str_replace('-', ' ', $slug);

        return new Response('Brack vanil '.$slug);
    }
}
