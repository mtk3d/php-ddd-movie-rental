<?php

namespace App\Rent\Domain\Policy;

use App\Rent\Domain\Policy;
use League\Period\Period;
use Munus\Collection\GenericList;
use Munus\Control\Either;
use Munus\Control\Either\Left;
use Munus\Control\Either\Right;

class NoOverlapping implements Policy
{
    /**
     * @param Period $period
     * @param GenericList<Period> $reservedPeriods
     * @return Either
     */
    public function isSatisfied(Period $period, GenericList $reservedPeriods): Either
    {
        $overlapped = $reservedPeriods->filter(
            fn (Period $reservedPeriod) => $reservedPeriod->overlaps($period)
        );

        return $overlapped->isEmpty()
            ? new Right(new Allowance())
            : new Left(new Rejection('Reservation can\'t overlap with previous ones'));
    }
}