<?php


namespace App\Rating\Domain;


use App\Shared\MovieId;

interface MovieRepository
{
    public function find(MovieId $id): Movie;
}