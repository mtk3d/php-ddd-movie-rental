<?php


namespace App\Rating\Domain;


use App\Rating\Domain\RateCalculator\AverageCalculator;
use Munus\Collection\GenericList;

abstract class RateCalculator
{
    /**
     * @param GenericList<Rate> $rates
     * @return Rate
     */
    public abstract function calculateOf(GenericList $rates): Rate;

    public static function average(GenericList $rates): Rate
    {
        return (new AverageCalculator())->calculateOf($rates);
    }
}