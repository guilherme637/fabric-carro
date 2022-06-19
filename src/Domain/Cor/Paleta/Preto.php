<?php

namespace App\Domain\Cor\Paleta;

use App\Domain\ShortNameClass;

class Preto extends CorAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}