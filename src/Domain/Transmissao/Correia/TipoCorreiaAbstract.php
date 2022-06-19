<?php

namespace App\Domain\Transmissao\Correia;

abstract class TipoCorreiaAbstract
{
    private string $tipoCorreia;

    public function __construct(string $tipoCorreia)
    {
        $this->tipoCorreia = ucfirst($tipoCorreia);
    }

    public function getTipoCorreia(): string
    {
        return $this->tipoCorreia;
    }
}