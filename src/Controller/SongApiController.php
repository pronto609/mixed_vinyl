<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
    #[Route('/song/api', name: 'app_song_api')]
    public function index(): Response
    {
        return $this->render('song_api/index.html.twig', [
            'controller_name' => 'SongApiController',
        ]);
    }

    #[Route(
        '/api/songs/{id<\d+>}',
        name: 'app_get_song_api',
        methods: ['GET']
    )]
    public function getSong(int $id, LoggerInterface $logger): Response
    {
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3'
        ];
//        return new JsonResponse($song);
        $logger->info('Reurnig api info for song {song}', [
            'song' => $id
        ]);
        return $this->json($song);
    }
}
