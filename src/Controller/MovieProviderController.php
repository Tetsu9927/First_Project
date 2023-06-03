<?php

namespace App\Controller;

class MovieProviderController
{
    public function moviesForTwig(array $movies): array
    {
        $parameters = [];

        foreach ($movies as $movie) {
            $parameters['movies'][] = [
                'title' => $movie -> getTitle(),
                'description' =>substr($movie -> getDescription(), 0, 26). '...',
                'link' =>'/movie/' . $movie -> getId(),
            ];

        }
        return $parameters;
    }
}
