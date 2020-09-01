<?php


namespace App\Rating\Domain;


use App\Shared\ClientId;
use App\Shared\MovieId;
use PHPUnit\Framework\TestCase;

class RateTest extends TestCase
{
    /**
     * @var Movie
     */
    private Movie $movie;
    /**
     * @var Evaluator
     */
    private Evaluator $evaluator;

    public function setUp(): void
    {
        $this->movie = Movie::of(MovieId::newOne());
        $this->evaluator = Evaluator::of(ClientId::newOne());
    }

    public function testMovieRate()
    {
        $result = $this->movie->rate(Rate::of(5), $this->evaluator);

        $this->assertTrue($result->isSuccessful());
        $this->assertInstanceOf(MovieRated::class, $result->events()[0]);
    }

    public function testMovieRateCalculation()
    {
        //given
        $evaluator = Evaluator::of(ClientId::newOne());
        $this->movie->rate(Rate::of(1), $evaluator);
        $evaluator = Evaluator::of(ClientId::newOne());
        $this->movie->rate(Rate::of(2), $evaluator);
        $evaluator = Evaluator::of(ClientId::newOne());
        $this->movie->rate(Rate::of(3), $evaluator);

        //when
        $result = $this->movie->rate(Rate::of(5), $this->evaluator);

        //then
        $this->assertTrue($result->events()[0]->getRate()->isEqual(Rate::of(2.75))); // (1 + 2 + 3 + 5) / 4 = 2.75
    }

    public function testChangeRate()
    {
        //given
        $evaluator = Evaluator::of(ClientId::newOne());
        $this->movie->rate(Rate::of(3), $evaluator);

        $this->movie->rate(Rate::of(5), $this->evaluator);

        //when
        $result = $this->movie->rate(Rate::of(4), $this->evaluator);

        //then
        $this->assertTrue($result->events()[0]->getRate()->isEqual(Rate::of(3.5))); // (3 + 4) / 2 = 3.5
    }
}