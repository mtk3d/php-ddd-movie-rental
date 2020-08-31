<?php


namespace App\Shared\Result;

use App\Shared\DomainEvent;
use App\Shared\Result;

final class Success extends Result
{
    /**
     * @var DomainEvent[]
     */
    protected $events;

    /**
     * @param DomainEvent[] $events
     */
    public function __construct(array $events)
    {
        $this->events = array_map(function (DomainEvent $event): DomainEvent {return  $event; }, $events);
    }
}
