<?php


namespace App\Shared\Result;

use App\Shared\Result;

final class Failure extends Result
{
    /**
     * @var string
     */
    protected string $reason;

    public function __construct(string $reason)
    {
        $this->reason = $reason;
    }
}
