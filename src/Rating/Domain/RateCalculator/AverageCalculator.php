<?php


namespace App\Rating\Domain\RateCalculator;


use App\Rating\Domain\Rate;
use App\Rating\Domain\RateCalculator;
use Munus\Collection\GenericList;
use Munus\Exception\UnsupportedOperationException;

class AverageCalculator extends RateCalculator
{
    /**
     * @param GenericList<Rate> $rates
     * @return Rate
     * @throws UnsupportedOperationException
     */
    public function calculateOf(GenericList $rates): Rate
    {
        $avg = $rates->map(fn (Rate $rate) => $rate->getValue())
            ->average();

        return Rate::of($avg);
    }
}