<?php


namespace App\Rating\Application;


use App\Rating\Domain\Evaluator;
use App\Rating\Domain\Movie;
use App\Rating\Domain\MovieRepository;
use App\Rating\Domain\Rate;
use App\Shared\ClientId;
use App\Shared\DomainEvent;
use App\Shared\DomainEventPublisher;
use App\Shared\MovieId;
use App\Shared\Result;

class MovieRatingService
{
    /**
     * @var MovieRepository
     */
    private MovieRepository $movieRepository;
    /**
     * @var DomainEventPublisher
     */
    private DomainEventPublisher $eventPublisher;

    public function __construct(MovieRepository $movieRepository, DomainEventPublisher $eventPublisher)
    {
        $this->movieRepository = $movieRepository;
        $this->eventPublisher = $eventPublisher;
    }

    public function rateMovie(MovieId $movieId, ClientId $clientId, Rate $rate): Result
    {
        $movie = $this->movieRepository
            ->find($movieId)
            ->getOrElseTry(fn () => Movie::of($movieId));

        $result = $movie->rate($rate, Evaluator::of($clientId));

        if ($result->isFailure()) {
            return $result;
        }

        $result->events()->forEach(
            function (DomainEvent $event): void {
                $this->eventPublisher->publish($event);
            }
        );

        $this->movieRepository->save($movie);

        return Result::success();
    }
}
