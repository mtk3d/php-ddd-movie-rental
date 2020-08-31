<?php

namespace App\Shared;

use App\Shared\Result\Failure;
use App\Shared\Result\Success;

abstract class Result
{
    /**
     * @param DomainEvent[] $events
     * @return Success
     */
    public static function success(array $events = []): Success
    {
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
     * @return DomainEvent[]
     */
    public function events(): array
    {
        if ($this instanceof Success) {
            return $this->events;
        }

        return [];
    }
}
