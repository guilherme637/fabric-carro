<?php

namespace App\Domain\Transmissao\Correia;

class Dentada extends TipoCorreiaAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}