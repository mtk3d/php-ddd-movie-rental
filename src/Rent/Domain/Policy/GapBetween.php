<?php

namespace App\Rent\Domain\Policy;

use App\Rent\Domain\Policy;
use App\Shared\DomainEvent;
use League\Period\Period;
use Munus\Collection\GenericList;
use Munus\Control\Either;
use Munus\Control\Either\Left;
use Munus\Control\Either\Right;

class GapBetween implements Policy
{
    /**
     * @param Period $period
     * @param GenericList<Period> $reservedPeriods
     * @return Either<Rejection, Allowance>
     */
    public function isSatisfied(Period $period, GenericList $reservedPeriods): Either
    {
        $touched = $reservedPeriods->filter(
            fn (Period $reservedPeriod) => $reservedPeriod->abuts($period)
        );

        return $reservedPeriods->isEmpty() || $touched->length() >= 1
            ? Either::right(new Allowance())
            : Either::left(new Rejection('Reservation must abust with previous ones'));
    }
}
