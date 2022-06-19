<?php

namespace App\Domain\Transmissao\Correia;

use App\Domain\ShortNameClass;

class Fita extends TipoCorreiaAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}