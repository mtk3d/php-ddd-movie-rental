<?php


namespace App\Shared;


interface DomainEvent
{
    public function eventId(): UUID;
}
