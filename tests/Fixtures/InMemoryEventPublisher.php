<?php


namespace App\Tests\Fixtures;


use App\Shared\DomainEvent;
use App\Shared\DomainEventPublisher;
use Munus\Collection\GenericList;

class InMemoryEventPublisher implements DomainEventPublisher
{
    /**
     * @var GenericList<DomainEvent>
     */
    private GenericList $events;

    public function __construct()
    {
        $this->events = GenericList::empty();
    }

    public function publish(DomainEvent $event): void
    {
        $this->events = $this->events->append($event);
    }

    /**
     * @return GenericList<DomainEvent>
     */
    public function events(): GenericList
    {
        return $this->events;
    }
}