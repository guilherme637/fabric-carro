<?php

namespace App\Domain\Transmissao\Tipo;

use App\Domain\ShortNameClass;
use App\Domain\Transmissao\Correia\Dentada;
use App\Domain\Transmissao\TipoTransmissaoAbstract;

class Manual extends TipoTransmissaoAbstract
{
    public function __construct(int $qtdMarcha)
    {
        parent::__construct($qtdMarcha, new Dentada(), true);
        $this->nomeTransmissao = ShortNameClass::getNameClass(__CLASS__);
    }
}