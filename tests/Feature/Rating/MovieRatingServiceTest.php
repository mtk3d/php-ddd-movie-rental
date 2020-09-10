<?php


namespace App\Rating\Domain;

use App\Rating\Infrastructure\MovieInMemoryRepository;
use App\Rating\Application\MovieRatingService;
use App\Shared\ClientId;
use App\Shared\DomainEventPublisher;
use App\Shared\MovieId;
use App\Shared\Result;
use PHPUnit\Framework\TestCase;

class MovieRatingServiceTest extends TestCase
{
    /**
     * @var MovieId
     */
    private MovieId $movieId;
    /**
     * @var ClientId
     */
    private ClientId $clientId;
    /**
     * @var MovieInMemoryRepository
     */
    private MovieInMemoryRepository $movieRepository;
    /**
     * @var MovieRatingService
     */
    private MovieRatingService $movieRatingService;

    public function setUp(): void
    {
        $this->movieId = MovieId::newOne();
        $this->clientId = ClientId::newOne();
        $this->movieRepository = new MovieInMemoryRepository();
        $eventPublisher = $this->createMock(DomainEventPublisher::class);
        $this->movieRatingService = new MovieRatingService($this->movieRepository, $eventPublisher);
    }

    public function testMovieRate(): void
    {
        /** @var Result $result */
        $result = $this->movieRatingService->rateMovie($this->movieId, $this->clientId, Rate::of(4));

        $this->assertTrue($result->isSuccessful());
    }
}
