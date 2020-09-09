<?php


namespace App\Rating\Infrastructure;

use App\Rating\Domain\Movie;
use App\Rating\Domain\MovieRepository;
use App\Shared\MovieId;
use Munus\Collection\GenericList;
use Munus\Control\Option;

class MovieInMemoryRepository implements MovieRepository
{
    /**
     * @var GenericList<Movie>
     */
    private GenericList $movies;

    public function __construct()
    {
        $this->movies = GenericList::empty();
    }

    /**
     * @inheritDoc
     */
    public function find(MovieId $movieId): Option
    {
        return $this->movies
            ->find(fn (Movie $movie) => $movie->getId() === $movieId);
    }

    /**
     * @inheritDoc
     */
    public function save(Movie $movie): void
    {
        $this->movies = $this->movies->append($movie);
    }
}
