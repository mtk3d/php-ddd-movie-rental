<?php


namespace App\Rating\Domain;


use App\Shared\MovieId;
use App\Shared\Result;
use App\Shared\UUID;
use Munus\Collection\GenericList;

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
     * Movie constructor.
     * @param MovieId $movieId
     * @param GenericList<UserRate> $usersRates
     */
    private function __construct(MovieId $movieId, GenericList $usersRates)
    {
        $this->movieId = $movieId;
        $this->usersRates = $usersRates;
    }

    public static function of(MovieId $movieId): Movie
    {
        return new Movie($movieId, GenericList::empty());
    }

    public function rate(Rate $rate, Evaluator $evaluator, RateCalculator $rateCalculator): Result
    {
        $this->usersRates = $this->usersRates->filterNot(function (UserRate $rate) use ($evaluator) {
            return $rate->isOwnedBy($evaluator);
        });

        $this->usersRates = $this->usersRates->append(UserRate::of($rate, $evaluator));

        $rates = $this->usersRates->map(function (UserRate $userRate) {
            return $userRate->getRate();
        });

        $calculatedRate = $rateCalculator->calculateOf($rates);

        $events = [ new MovieRated(UUID::random(), FinalRate::of($this->movieId, $calculatedRate)) ];

        return Result::success($events);
    }
}