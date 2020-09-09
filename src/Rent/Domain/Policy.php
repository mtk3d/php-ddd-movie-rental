<?php


namespace App\Rent\Domain;


use App\Rent\Domain\Policy\Allowance;
use App\Rent\Domain\Policy\Rejection;
use League\Period\Period;
use Munus\Collection\GenericList;
use Munus\Control\Either;

interface Policy
{
    /**
     * @param Period $period
     * @param GenericList<Period> $reservedPeriods
     * @return Either<Rejection, Allowance>
     */
    public function isSatisfied(Period $period, GenericList $reservedPeriods): Either;
}