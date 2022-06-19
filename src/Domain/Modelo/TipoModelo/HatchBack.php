<?php

namespace App\Domain\Modelo\TipoModelo;

use App\Domain\Modelo\Dimensao\Pequeno;
use App\Domain\Modelo\ModeloAbstract;

class HatchBack extends ModeloAbstract
{
    public function __construct(int $largura, int $altura, int $comprimento)
    {
        parent::__construct(true, new Pequeno($largura, $altura, $comprimento));
    }
}