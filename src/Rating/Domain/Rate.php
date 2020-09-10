<?php


namespace App\Rating\Domain;

use Webmozart\Assert\Assert;

class Rate
{
    /**
     * @var float
     */
    private float $rate;

    /**
     * Rate constructor.
     * @param float $rate
     */
    public function __construct(float $rate)
    {
        $this->rate = $rate;
    }

    public static function of(float $rate): Rate
    {
        Assert::range($rate, 0, 5);

        return new Rate($rate);
    }

    public function getValue(): float
    {
        return $this->rate;
    }
}
