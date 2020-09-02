<?php


namespace App\Rating\Application;


use App\Rating\Domain\Evaluator;
use App\Rating\Domain\Movie;
use App\Rating\Domain\MovieRepository;
use App\Rating\Domain\Rate;
use App\Shared\ClientId;
use App\Shared\MovieId;
use App\Shared\Result;

class MovieRatingService
{
    /**
     * @var MovieRepository
     */
    private MovieRepository $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function rateMovie(MovieId $movieId, ClientId $clientId, Rate $rate): Result
    {
        $movie = $this->movieRepository
            ->find($movieId)
            ->getOrElseTry(fn () => Movie::of($movieId))
            ->rate($rate, Evaluator::of($clientId));

        $this->movieRepository->save($movie);

        return Result::success();
    }
}