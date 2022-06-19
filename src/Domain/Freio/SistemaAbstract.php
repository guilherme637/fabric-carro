<?php

namespace App\Domain\Freio;

class SistemaAbstract
{
    private string $sistema;

    public function __construct(string $sistema)
    {
        $this->sistema = ucfirst($sistema);
    }

    public function getSistema(): string
    {
        return $this->sistema;
    }
}