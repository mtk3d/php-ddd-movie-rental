<?php


namespace App\Rating\Domain;

use App\Rating\Infrastructure\MovieInMemoryRepository;
use App\Rating\Application\MovieRatingService;
use App\Shared\ClientId;
use App\Shared\DomainEventPublisher;
use App\Shared\MovieId;
use App\Tests\Fixtures\InMemoryEventPublisher;
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
    /**
     * @var InMemoryEventPublisher
     */
    private InMemoryEventPublisher $eventPublisher;

    public function setUp(): void
    {
        $this->movieId = MovieId::newOne();
        $this->clientId = ClientId::newOne();
        $this->movieRepository = new MovieInMemoryRepository();
        $this->eventPublisher = new InMemoryEventPublisher();
        $this->movieRatingService = new MovieRatingService($this->movieRepository, $this->eventPublisher);
    }

    public function testMovieRate(): void
    {
        $this->movieRatingService->rateMovie($this->movieId, $this->clientId, Rate::of(4));

        $movieRatedEvent = $this->eventPublisher->events()->head();
        $this->assertTrue($movieRatedEvent->getRate()->isEqual(Rate::of(4)));
    }
}
