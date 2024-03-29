<?php

namespace App\Domain\Transmissao\Tipo;

use App\Domain\ShortNameClass;
use App\Domain\Transmissao\Correia\Fita;
use App\Domain\Transmissao\TipoTransmissaoAbstract;

class Automatico extends TipoTransmissaoAbstract
{
    public function __construct(int $qtdMarcha)
    {
        parent::__construct($qtdMarcha, new Fita(), false);
        $this->nomeTransmissao = ShortNameClass::getNameClass(__CLASS__);
    }
}