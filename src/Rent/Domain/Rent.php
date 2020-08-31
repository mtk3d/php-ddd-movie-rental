<?php


namespace App\Rent\Domain;


use App\Shared\ClientId;
use League\Period\Period;

class Rent
{
    /**
     * @var ClientId
     */
    private ClientId $clientId;
    /**
     * @var Period
     */
    private Period $period;

    /**
     * Rent constructor.
     * @param ClientId $clientId
     * @param Period $period
     */
    public function __construct(ClientId $clientId, Period $period)
    {
        $this->clientId = $clientId;
        $this->period = $period;
    }

    /**
     * @return Period
     */
    public function getPeriod(): Period
    {
        return $this->period;
    }
}