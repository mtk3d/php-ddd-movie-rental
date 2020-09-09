<?php


namespace App\Rating\Domain;

use App\Shared\DomainEvent;
use App\Shared\MovieId;
use App\Shared\Result;
use App\Shared\UUID;
use Munus\Collection\GenericList;
use Munus\Exception\UnsupportedOperationException;

class Movie
{
    /**
     * @var MovieId
     */
    private MovieId $movieId;
    /**
     * @var GenericList<UserRate>
     */
    private GenericList $usersRates;
    /**
     * @var Rate
     */
    private Rate $rate;

    /**
     * Movie constructor.
     * @param MovieId $movieId
     * @param GenericList<UserRate> $usersRates
     * @param Rate $rate
     */
    private function __construct(MovieId $movieId, GenericList $usersRates, Rate $rate)
    {
        $this->movieId = $movieId;
        $this->usersRates = $usersRates;
        $this->rate = $rate;
    }

    /**
     * @param MovieId $movieId
     * @return Movie
     */
    public static function of(MovieId $movieId): Movie
    {
        return new Movie($movieId, GenericList::empty(), Rate::of(0));
    }

    /**
     * @param Rate $rate
     * @param Evaluator $evaluator
     * @return Result
     */
    public function rate(Rate $rate, Evaluator $evaluator): Result
    {
        $this->usersRates = $this->usersRates
            ->filter(
                fn (UserRate $rate) => !$rate->isOwnedBy($evaluator)
            )
            ->append(UserRate::of($rate, $evaluator));

        $rates = $this->usersRates->map(
            fn (UserRate $userRate) => $userRate->getRate()
        );

        try {
            $this->rate = RateCalculator::average($rates);
        } catch (UnsupportedOperationException $e) {
            return Result::failure("Rate average calculation error");
        }

        /** @var GenericList<DomainEvent> $events */
        $events = GenericList::of(
            MovieRated::of($this->movieId, $this->rate)
        );

        return Result::success($events);
    }

    public function getId(): MovieId
    {
        return $this->movieId;
    }

    /**
     * @return Rate
     */
    public function getRate(): Rate
    {
        return $this->rate;
    }
}
