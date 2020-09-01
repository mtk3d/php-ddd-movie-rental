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

    public static function of(MovieId $movieId): Movie
    {
        return new Movie($movieId, GenericList::empty(), Rate::of(0));
    }

    public function rate(Rate $rate, Evaluator $evaluator): Result
    {
        $this->usersRates = $this->usersRates
            ->filterNot(
                fn (UserRate $rate) => $rate->isOwnedBy($evaluator)
            )
            ->append(UserRate::of($rate, $evaluator));

        $rates = $this->usersRates->map(
            fn (UserRate $userRate) => $userRate->getRate()
        );

        $this->rate = RateCalculator::average($rates);

        $movieRated = new MovieRated(UUID::random(), $this->movieId, $this->rate);

        $events = GenericList::of($movieRated);

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