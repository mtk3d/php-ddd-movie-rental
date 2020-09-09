<?php


namespace App\Rent\Domain;

use App\Rent\Domain\Policy\NoOverlapping;
use App\Shared\ClientId;
use App\Shared\MovieId;
use League\Period\Period;
use Munus\Collection\GenericList;
use PHPUnit\Framework\TestCase;

class MovieRentTest extends TestCase
{
    private MovieCopy $movieCopy;

    public function setUp(): void
    {
        $this->movieCopy = MovieCopy::of(MovieCopyId::newOne(), MovieId::newOne(), CopyType::bluray(), CopyStatus::available());
    }

    public function testStandardMovieRent(): void
    {
        $policies = GenericList::of(new NoOverlapping());
        $result = $this->movieCopy->reserve(ClientId::newOne(), Period::after("2020-02-12 12:00", "1 WEEK"), $policies);

        $this->assertTrue($result->isRight());
    }

    public function testRentUnavailableMovie(): void
    {
        $policies = GenericList::of(new NoOverlapping());
        $this->movieCopy->reserve(ClientId::newOne(), Period::after("2020-02-12 12:00", "1 WEEK"), $policies);
        $result = $this->movieCopy->reserve(ClientId::newOne(), Period::after("2020-02-12 12:00", "1 WEEK"), $policies);

        $this->assertTrue($result->isLeft());
    }
}
