<?php


namespace App\Rating\Domain;


use App\Shared\DomainEvent;
use App\Shared\MovieId;
use App\Shared\UUID;

class MovieRated implements DomainEvent
{
    /**
     * @var UUID
     */
    private UUID $id;
    /**
     * @var FinalRate
     */
    private FinalRate $finalRate;

    public function __construct(UUID $id, FinalRate $finalRate)
    {
        $this->id = $id;
        $this->finalRate = $finalRate;
    }

    public function eventId(): UUID
    {
        return $this->id;
    }

    public function getRate(): Rate
    {
        return $this->finalRate->getRate();
    }
}