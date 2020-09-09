<?php


namespace App\Shared;

interface DomainEventPublisher
{
    public function publish(DomainEvent $event): void;
}
