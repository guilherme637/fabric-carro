<?php

namespace App\Domain\Modelo\TipoModelo;

use App\Domain\Modelo\Dimensao\Medio;
use App\Domain\Modelo\ModeloAbstract;

class SedanCompacto extends ModeloAbstract
{
    public function __construct(int $largura, int $altura, int $comprimento)
    {
        parent::__construct(false, new Medio($largura, $altura, $comprimento));
    }
}