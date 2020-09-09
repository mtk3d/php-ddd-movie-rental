<?php


namespace App\Rent\Domain;

use MyCLabs\Enum\Enum;

/**
 * @extends Enum<string>
 * @method static CopyType dvd()
 * @method static CopyType bluray()
 * @method static CopyType vhs()
 */
class CopyType extends Enum
{
    private const dvd = 'dvd';
    private const bluray = 'bluray';
    private const vhs = 'vhs';
}
