<?php

namespace App\Domain\Freio;

final class Freio
{
    private SistemaAbstract $sistema;

    public function __construct(SistemaAbstract $sistema)
    {
        $this->sistema = $sistema;
    }

    public function getFreio(): string
    {
        return $this->sistema->getSistema();
    }
}