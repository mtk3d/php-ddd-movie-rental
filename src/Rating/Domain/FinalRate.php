<?php


namespace App\Rating\Domain;


use App\Shared\MovieId;
use Webmozart\Assert\Assert;

final class FinalRate
{
    /**
     * @var MovieId
     */
    private MovieId $movieId;
    /**
     * @var Rate
     */
    private Rate $rate;

    private function __construct(MovieId $movieId, Rate $rate)
    {
        $this->movieId = $movieId;
        $this->rate = $rate;
    }

    public static function of(MovieId $movieId, Rate $rate): FinalRate
    {
        return new FinalRate($movieId, $rate);
    }

    public function getRate(): Rate
    {
        return $this->rate;
    }
}