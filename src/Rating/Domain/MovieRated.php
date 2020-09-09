<?php


namespace App\Rating\Domain;

use App\Shared\DomainEvent;
use App\Shared\MovieId;
use App\Shared\UUID;

class MovieRated implements DomainEvent
{
    /**
     * @var UUID
     */
    private UUID $id;
    /**
     * @var MovieId
     */
    private MovieId $movieId;
    /**
     * @var Rate
     */
    private Rate $rate;

    private function __construct(UUID $id, MovieId $movieId, Rate $rate)
    {
        $this->id = $id;
        $this->movieId = $movieId;
        $this->rate = $rate;
    }

    public static function of(MovieId $movieId, Rate $rate): MovieRated
    {
        return new MovieRated(UUID::random(), $movieId, $rate);
    }

    public function eventId(): UUID
    {
        return $this->id;
    }

    public function getRate(): Rate
    {
        return $this->rate;
    }
}
