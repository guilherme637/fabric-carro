<?php

namespace App\Domain\Modelo;

use App\Domain\Modelo\Dimensao\DimensaoAbstract;

final class Modelo
{
    private ModeloAbstract $modelo;

    public function __construct(ModeloAbstract $modelo)
    {
        $this->modelo = $modelo;
    }

    public function getDimensoes(): DimensaoAbstract
    {
        return $this->modelo->getDimensao();
    }

    public function hasLimpadorParabrisa(): bool
    {
        return $this->modelo->hasLimpadorParabrisaTraseiro();
    }

    public function getModelo(): string
    {
        return $this->modelo->getNomeModelo();
    }
}