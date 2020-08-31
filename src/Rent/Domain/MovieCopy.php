<?php


namespace App\Rent\Domain;


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
     * @return Either
     */
    public function reserve(ClientId $clientId, Period $period, GenericList $policies): Either
    {
        $rejections = $policies
            ->map(function (Policy $policy) use ($period): Either {
                return $policy->isSatisfied($period, $this->getReservedPeriods());
            })
            ->find(function (Either $either): bool {
                return $either->isLeft();
            })
            ->map(function (Either $either) {
                return $either->getLeft();
            });

        if ($rejections->isEmpty()) {
            $rent = new Rent($clientId, $period);
            $this->rents = $this->rents->append($rent);

            return new Right($rent);
        } else {
            return new Left($rejections->get());
        }
    }

    public function getReservedPeriods(): GenericList
    {
        return $this->rents->map(function (Rent $rent) {
            return $rent->getPeriod();
        });
    }

    /**
     * @return MovieCopyId
     */
    public function getId(): MovieCopyId
    {
        return $this->id;
    }
}