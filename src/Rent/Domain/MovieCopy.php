<?php


namespace App\Rent\Domain;

use App\Rent\Domain\Policy\Rejection;
use App\Shared\ClientId;
use App\Shared\MovieId;
use League\Period\Period;
use Munus\Collection\GenericList;
use Munus\Control\Either;
use Munus\Control\Either\Left;
use Munus\Control\Either\Right;

final class MovieCopy
{
    /**
     * @var MovieCopyId
     */
    private MovieCopyId $id;
    /**
     * @var MovieId
     */
    private MovieId $movieId;
    /**
     * @var CopyType
     */
    private CopyType $type;
    /**
     * @var CopyStatus
     */
    private CopyStatus $status;
    /**
     * @var GenericList<Rent>
     */
    private GenericList $rents;

    /**
     * MovieCopy constructor.
     * @param MovieCopyId $id
     * @param MovieId $movieId
     * @param CopyType $type
     * @param CopyStatus $status
     * @param GenericList<Rent> $rents
     */
    public function __construct(MovieCopyId $id, MovieId $movieId, CopyType $type, CopyStatus $status, GenericList $rents)
    {
        $this->id = $id;
        $this->movieId = $movieId;
        $this->type = $type;
        $this->status = $status;
        $this->rents = $rents;
    }

    /**
     * @param MovieCopyId $id
     * @param MovieId $movieId
     * @param CopyType $type
     * @param CopyStatus $status
     * @return MovieCopy
     */
    public static function of(MovieCopyId $id, MovieId $movieId, CopyType $type, CopyStatus $status): MovieCopy
    {
        return new MovieCopy($id, $movieId, $type, $status, GenericList::empty());
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->status->equals(CopyStatus::available());
    }

    /**
     * @param CopyType $type
     * @return bool
     */
    public function isType(CopyType $type): bool
    {
        return $this->type->equals($type);
    }

    /**
     * @param ClientId $clientId
     * @param Period $period
     * @param GenericList<Policy> $policies
     * @return Either<GenericList<Rejection>, Rent>
     */
    public function reserve(ClientId $clientId, Period $period, GenericList $policies): Either
    {
        $rejections = $policies
            ->map(
                fn (Policy $policy): Either =>
                $policy->isSatisfied($period, $this->getReservedPeriods())
            )
            ->find(fn (Either $either): bool => $either->isLeft())
            ->map(fn (Either $either) => $either->getLeft());

        if ($rejections->isEmpty()) {
            $rent = new Rent($clientId, $period);
            $this->rents = $this->rents->append($rent);

            return new Right($rent);
        } else {
            return new Left($rejections->get());
        }
    }

    /**
     * @return GenericList<Period>
     */
    public function getReservedPeriods(): GenericList
    {
        return $this->rents->map(
            fn (Rent $rent) => $rent->getPeriod()
        );
    }

    /**
     * @return MovieCopyId
     */
    public function getId(): MovieCopyId
    {
        return $this->id;
    }
}
