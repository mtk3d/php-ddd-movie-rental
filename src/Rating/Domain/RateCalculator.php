<?php


namespace App\Rating\Domain;


use App\Rating\Domain\RateCalculator\AverageCalculator;
use Munus\Collection\GenericList;
use Munus\Exception\UnsupportedOperationException;

abstract class RateCalculator
{
    /**
     * @param GenericList<Rate> $rates
     * @return Rate
     */
    public abstract function calculateOf(GenericList $rates): Rate;

    /**
     * @param GenericList<Rate> $rates
     * @return Rate
     * @throws UnsupportedOperationException
     */
    public static function average(GenericList $rates): Rate
    {
        return (new AverageCalculator())->calculateOf($rates);
    }
}