<?php

namespace App\Payment\Domain;

use App\Shared\ClientId;

class Payer
{
    /**
     * @var ClientId
     */
    private ClientId $clientId;

    public function __construct(ClientId $clientId)
    {
        $this->clientId = $clientId;
    }
}