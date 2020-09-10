<?php


namespace App\Rent\Domain;

use App\Rent\Domain\Policy\NoOverlapping;
use App\Rent\Domain\Policy\Rejection;
use App\Shared\ClientId;
use App\Shared\MovieId;
use App\Shared\Result;
use League\Period\Period;
use Munus\Collection\GenericList;
use Munus\Control\Either;
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
        /** @var GenericList<Policy> $policies */
        $policies = GenericList::of(new NoOverlapping());

        /** @var Either<GenericList<Rejection>, Rent> $result */
        $result = $this->movieCopy->reserve(ClientId::newOne(), Period::after("2020-02-12 12:00", "1 WEEK"), $policies);

        $this->assertTrue($result->isRight());
    }

    public function testRentUnavailableMovie(): void
    {
        /** @var GenericList<Policy> $policies */
        $policies = GenericList::of(new NoOverlapping());
        $this->movieCopy->reserve(ClientId::newOne(), Period::after("2020-02-12 12:00", "1 WEEK"), $policies);
        /** @var Either<GenericList<Rejection>, Rent> $result */
        $result = $this->movieCopy->reserve(ClientId::newOne(), Period::after("2020-02-12 12:00", "1 WEEK"), $policies);

        $this->assertTrue($result->isLeft());
    }
}
