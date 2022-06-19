<?php

namespace App\Domain\Modelo\TipoModelo;

use App\Domain\Modelo\Dimensao\Pequeno;
use App\Domain\Modelo\ModeloAbstract;
use App\Domain\ShortNameClass;

class HatchBack extends ModeloAbstract
{
    public function __construct(int $largura, int $altura, int $comprimento)
    {
        parent::__construct(true, new Pequeno($largura, $altura, $comprimento));
        $this->nomeModelo = ShortNameClass::getNameClass(__CLASS__);
    }
}