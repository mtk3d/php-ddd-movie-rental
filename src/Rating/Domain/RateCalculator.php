<?php


namespace App\Rating\Domain;


use Munus\Collection\GenericList;

interface RateCalculator
{
    /**
     * @param GenericList<Rate> $rates
     * @return Rate
     */
    public function calculateOf(GenericList $rates): Rate;
}