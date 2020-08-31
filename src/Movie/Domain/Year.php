<?php


namespace App\Movie;


use Webmozart\Assert\Assert;

class Year
{
    /**
     * @var int
     */
    private int $year;

    public function __construct(int $year)
    {
        Assert::natural($year);

        $this->year = $year;
    }

    public function __toString(): string
    {
        return (string)$this->year;
    }
}