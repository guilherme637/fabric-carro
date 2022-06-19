<?php

namespace App\Domain\Transmissao;

final class Transmissao
{
    private TipoTransmissaoAbstract $tipoTransmissao;

    public function __construct(TipoTransmissaoAbstract $tipoTransmissao)
    {
        $this->tipoTransmissao = $tipoTransmissao;
    }

    public function getTransmissao(): TipoTransmissaoAbstract
    {
        return $this->tipoTransmissao;
    }
}