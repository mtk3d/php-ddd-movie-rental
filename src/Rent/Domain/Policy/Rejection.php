<?php


namespace App\Rent\Domain\Policy;


class Rejection
{
    /**
     * @var string
     */
    private string $reason;

    /**
     * Rejection constructor.
     * @param string $reason
     */
    public function __construct(string $reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
}