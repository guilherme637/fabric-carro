<?php

namespace App\Domain\Modelo\TipoModelo;

use App\Domain\Modelo\Dimensao\Grande;
use App\Domain\Modelo\ModeloAbstract;
use App\Domain\ShortNameClass;

class Sedan extends ModeloAbstract
{
    public function __construct(int $largura, int $altura, int $comprimento)
    {
        parent::__construct(false, new Grande($largura, $altura, $comprimento));
        $this->nomeModelo = ShortNameClass::getNameClass(__CLASS__);
    }
}