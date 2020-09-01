<?php


namespace App\Shared\Result;

use App\Shared\DomainEvent;
use App\Shared\Result;
use Munus\Collection\GenericList;

final class Success extends Result
{
    /**
     * @var GenericList<DomainEvent>
     */
    protected GenericList $events;

    /**
     * @param GenericList<DomainEvent> $events
     */
    public function __construct(GenericList $events)
    {
        $this->events = $events;
    }
}
