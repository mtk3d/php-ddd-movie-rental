<?php


namespace App\Payment\Domain;


use MyCLabs\Enum\Enum;

/**
 * @extends Enum<string>
 * @method static PaymentStatus pending()
 * @method static PaymentStatus cancelled()
 * @method static PaymentStatus paid()
 */
class PaymentStatus extends Enum
{
    private const pending = 'pending';
    private const cancelled = 'cancelled';
    private const paid = 'paid';
}