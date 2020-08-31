<?php


namespace App\Rating\Domain;


use App\Shared\ClientId;

class Evaluator
{
    /**
     * @var ClientId
     */
    private ClientId $id;

    public function __construct(ClientId $id)
    {
        $this->id = $id;
    }

    public static function of(ClientId $id): Evaluator
    {
        return new Evaluator($id);
    }

    public function isSame(Evaluator $evaluator): bool
    {
        return $this->id->isEqual($evaluator->getId());
    }

    private function getId(): ClientId
    {
        return $this->id;
    }
}