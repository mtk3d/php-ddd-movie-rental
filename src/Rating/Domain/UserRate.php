<?php


namespace App\Rating\Domain;


use Webmozart\Assert\Assert;

class UserRate
{
    /**
     * @var Rate
     */
    private Rate $rate;
    /**
     * @var Evaluator
     */
    private Evaluator $evaluator;

    private function __construct(Rate $rate, Evaluator $evaluator)
    {
        $this->rate = $rate;
        $this->evaluator = $evaluator;
    }

    public static function of(Rate $rate, Evaluator $evaluator): UserRate
    {
        return new UserRate($rate, $evaluator);
    }

    /**
     * @return Rate
     */
    public function getRate(): Rate
    {
        return $this->rate;
    }

    public function isOwnedBy(Evaluator $evaluator): bool
    {
        return $this->evaluator->isSame($evaluator);
    }
}