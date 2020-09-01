<?php

namespace App\Shared;

use App\Shared\Result\Failure;
use App\Shared\Result\Success;
use Munus\Collection\GenericList;

abstract class Result
{
    /**
     * @param GenericList<DomainEvent> $events
     * @return Success
     */
    public static function success(GenericList $events = null): Success
    {
        if ($events == null) {
            $events = GenericList::empty();
        }

        return new Success($events);
    }

    public static function failure(string $reason): Failure
    {
        return new Failure($reason);
    }

    public function isFailure(): bool
    {
        return $this instanceof Failure;
    }

    public function isSuccessful(): bool
    {
        return $this instanceof Success;
    }

    public function reason(): string
    {
        if ($this instanceof Failure) {
            return $this->reason;
        }

        return 'OK';
    }

    /**
     * @return GenericList<DomainEvent>
     */
    public function events(): GenericList
    {
        if ($this instanceof Success) {
            return $this->events;
        }

        return GenericList::empty();
    }
}
