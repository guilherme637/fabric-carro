<?php

namespace App\Domain\Cor\Paleta;

class Prata extends CorAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}