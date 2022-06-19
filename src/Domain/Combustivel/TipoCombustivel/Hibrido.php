<?php

namespace App\Domain\Combustivel\TipoCombustivel;

use App\Domain\Combustivel\CombustivelAbstract;

class Hibrido extends CombustivelAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}