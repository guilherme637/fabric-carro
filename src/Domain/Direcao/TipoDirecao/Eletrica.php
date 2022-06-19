<?php

namespace App\Domain\Direcao\TipoDirecao;

use App\Domain\Direcao\AcaoAbstract;
use App\Domain\ShortNameClass;

class Eletrica extends AcaoAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}