<?php


namespace App\Rating\Domain;

use App\Shared\MovieId;
use Munus\Control\Option;

interface MovieRepository
{
    /**
     * @param MovieId $id
     * @return Option<Movie>
     */
    public function find(MovieId $id): Option;

    /**
     * @param Movie $movie
     */
    public function save(Movie $movie): void;
}
