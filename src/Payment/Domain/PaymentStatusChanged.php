<?php


namespace App\Payment\Domain;


use App\Shared\DomainEvent;
use App\Shared\PaymentId;
use App\Shared\UUID;

class PaymentStatusChanged implements DomainEvent
{
    /**
     * @var UUID
     */
    private UUID $id;
    /**
     * @var PaymentId
     */
    private PaymentId $paymentId;
    /**
     * @var PaymentStatus
     */
    private PaymentStatus $status;

    private function __construct(UUID $id, PaymentId $paymentId, PaymentStatus $status)
    {
        $this->id = $id;
        $this->paymentId = $paymentId;
        $this->status = $status;
    }

    public static function of(PaymentId $paymentId, PaymentStatus $status): PaymentStatusChanged
    {
        return new PaymentStatusChanged(UUID::random(), $paymentId, $status);
    }

    public function eventId(): UUID
    {
        return $this->id;
    }

    public function paymentId(): PaymentId
    {
        return $this->paymentId;
    }

    public function status(): PaymentStatus
    {
        return $this->status;
    }
}