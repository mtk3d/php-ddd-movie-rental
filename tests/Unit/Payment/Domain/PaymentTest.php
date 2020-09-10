<?php


namespace App\Payment\Domain;

use App\Shared\ClientId;
use App\Shared\DomainEvent;
use App\Shared\Result;
use Money\Money;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * @var Payment
     */
    private Payment $payment;

    public function setUp(): void
    {
        parent::setUp();

        $this->payment = Payment::of(ClientId::newOne(), Money::PLN(10));
    }

    public function testPaymentPay(): void
    {
        /** @var Result $result */
        $result = $this->payment->pay();

        /** @var DomainEvent $event */
        $event = $result->events()->head();

        $this->assertEquals(
            $event,
            new PaymentStatusChanged($event->eventId(), $this->payment->getId(), PaymentStatus::paid())
        );
    }

    public function testPaymentCancel(): void
    {
        /** @var Result $result */
        $result = $this->payment->cancel();

        /** @var DomainEvent $event */
        $event = $result->events()->head();

        $this->assertEquals(
            $event,
            new PaymentStatusChanged($event->eventId(), $this->payment->getId(), PaymentStatus::cancelled())
        );
    }

    public function testPayCancelledPayment(): void
    {
        $this->payment->cancel();
        /** @var Result $result */
        $result = $this->payment->pay();

        $this->assertTrue($result->isFailure());
    }

    public function testCancelledPaidPayment(): void
    {
        $this->payment->pay();
        /** @var Result $result */
        $result = $this->payment->cancel();

        $this->assertTrue($result->isFailure());
    }
}
