<?php


namespace App\Rent\Domain;


use MyCLabs\Enum\Enum;

/**
 * @method static CopyStatus available()
 * @method static CopyStatus unavailable()
 */
class CopyStatus extends Enum
{
    private const available = 'available';
    private const unavailable = 'unavailable';
}