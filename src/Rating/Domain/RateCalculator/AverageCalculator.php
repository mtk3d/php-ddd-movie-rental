<?php


namespace App\Rating\Domain\RateCalculator;


use App\Rating\Domain\Rate;
use App\Rating\Domain\RateCalculator;
use Munus\Collection\GenericList;

class AverageCalculator extends RateCalculator
{
    /**
     * @param GenericList<Rate> $rates
     * @return Rate
     */
    public function calculateOf(GenericList $rates): Rate
    {
        $sum = $rates->reduce(function ($value, Rate $rate) {
            return $rate->sum($value);
        });

        return Rate::of($sum->getValue() / $rates->length());
    }
}