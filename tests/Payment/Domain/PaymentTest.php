<?php


namespace App\Payment\Domain;

use App\Shared\ClientId;
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
        $result = $this->payment->pay();

        $this->assertEquals(PaymentStatus::paid(), $result->events()->head()->status());
    }

    public function testPaymentCancel(): void
    {
        $result = $this->payment->cancel();

        $this->assertEquals(PaymentStatus::cancelled(), $result->events()->head()->status());
    }

    public function testPayCancelledPayment(): void
    {
        $this->payment->cancel();
        $result = $this->payment->pay();

        $this->assertEquals("Cannot pay this payment", $result->reason());
    }

    public function testCancelledPaidPayment(): void
    {
        $this->payment->pay();
        $result = $this->payment->cancel();

        $this->assertEquals("Cannot cancel this payment", $result->reason());
    }
}
