<?php


namespace App\Rent\Domain;


use DateTimeImmutable;
use Munus\Control\Either;

interface MovieCopyRepository
{
    /**
     * @param DateTimeImmutable $since
     * @return MovieCopy|null
     */
    public function getSince(DateTimeImmutable $since): ?MovieCopy;

    /**
     * @param MovieCopy $movieCopy
     * @return void
     */
    public function store(MovieCopy $movieCopy): void;
}