<?php

namespace App\Domain\Direcao;

class AcaoAbstract
{
    private string $tipo;

    public function __construct(string $tipo)
    {
        $this->tipo = ucfirst($tipo);
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }
}