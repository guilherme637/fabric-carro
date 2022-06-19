<?php

namespace App\Domain\Combustivel;

final class Combustivel
{
    private CombustivelAbstract $combustivelAbstract;

    public function __construct(CombustivelAbstract $combustivelAbstract)
    {
        $this->combustivelAbstract = $combustivelAbstract;
    }

    public function getCombustivel(): string
    {
        return $this->combustivelAbstract->getTipoCombustivel();
    }
}