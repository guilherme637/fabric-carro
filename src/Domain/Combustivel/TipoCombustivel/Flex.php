<?php

namespace App\Domain\Combustivel\TipoCombustivel;

use App\Domain\Combustivel\CombustivelAbstract;
use App\Domain\ShortNameClass;

class Flex extends CombustivelAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}