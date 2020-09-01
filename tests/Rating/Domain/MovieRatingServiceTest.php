<?php


namespace App\Rating\Domain;


use App\Rating\Infrastructure\MovieInMemoryRepository;
use App\Rating\Application\MovieRatingService;
use App\Shared\ClientId;
use App\Shared\MovieId;
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
        $this->movieRatingService = new MovieRatingService($this->movieRepository);
    }

    public function testMovieRate()
    {
        $movie = Movie::of($this->movieId);
        $this->movieRepository->save($movie);

        $this->movieRatingService->rateMovie($this->movieId, $this->clientId, Rate::of(4));

        $this->assertTrue($movie->getRate()->isEqual(Rate::of(4)));
    }
}