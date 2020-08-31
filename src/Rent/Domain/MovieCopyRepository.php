<?php


namespace App\Rent\Domain;


use DateTimeImmutable;
use Munus\Control\Either;

interface MovieCopyRepository
{
    public function getSince(DateTimeImmutable $since): ?MovieCopy;
    public function store(MovieCopy $movieCopy): Either;
}