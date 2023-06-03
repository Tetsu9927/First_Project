<?php

namespace App\Controller;

use App\Entity\Movies;
use App\Repository\MoviesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    public function __construct(
        private MoviesRepository $moviesRepository,
        private MovieProviderController $movieProviderController,
    )
    {
    }

    #[Route('/mainpage', 'homepage')]
    public function showMovies(): Response
    {
        $movies = $this->moviesRepository->findAll();
        $parameters = [];
        if($movies) {
            $parameters = $this->movieProviderController->moviesForTwig($movies);
        }
        return $this->render('homepage.html.twig', $parameters);
    }
    #[Route('/movie/{movie}','movie')]
    public function showMovie(Movies $movie): Response
    {
        return $this->render('movie.html.twig', ['movie' => $movie]);
    }
}
