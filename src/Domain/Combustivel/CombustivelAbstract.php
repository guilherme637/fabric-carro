<?php

namespace App\Domain\Combustivel;

class CombustivelAbstract
{
    private string $tipoCombustivel;

    public function __construct(string $tipoCombustivel)
    {
        $this->tipoCombustivel = $tipoCombustivel;
    }

    public function getTipoCombustivel(): string
    {
        return $this->tipoCombustivel;
    }
}