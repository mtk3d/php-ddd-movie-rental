<?php


namespace App\Payment\Domain;


use App\Shared\ClientId;
use App\Shared\DomainEvent;
use App\Shared\PaymentId;
use App\Shared\Result;
use Money\Money;
use Munus\Collection\GenericList;

class Payment
{
    /**
     * @var PaymentId
     */
    private PaymentId $id;
    /**
     * @var ClientId
     */
    private ClientId $payer;
    /**
     * @var PaymentStatus
     */
    private PaymentStatus $status;
    /**
     * @var Money
     */
    private Money $amount;

    private function __construct(PaymentId $id, ClientId $payer, PaymentStatus $status, Money $amount)
    {
        $this->id = $id;
        $this->payer = $payer;
        $this->status = $status;
        $this->amount = $amount;
    }

    public static function of(ClientId $clientId, Money $amount): Payment
    {
        return new Payment(PaymentId::newOne(), $clientId, PaymentStatus::pending(), $amount);
    }

    public function pay(): Result
    {
        if (!$this->status->equals(PaymentStatus::pending())) {
            return Result::failure("Cannot pay this payment");
        }

        $this->status = PaymentStatus::paid();

        /** @var GenericList<DomainEvent> $events */
        $events = GenericList::of(
            PaymentStatusChanged::of($this->id, $this->status)
        );

        return Result::success($events);
    }

    public function cancel(): Result
    {
        if ($this->status->equals(PaymentStatus::paid())) {
            return Result::failure("Cannot cancel this payment");
        }

        $this->status = PaymentStatus::cancelled();

        /** @var GenericList<DomainEvent> $events */
        $events = GenericList::of(
            PaymentStatusChanged::of($this->id, $this->status)
        );

        return Result::success($events);
    }
}