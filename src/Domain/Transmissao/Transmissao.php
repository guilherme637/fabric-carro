<?php

namespace App\Domain\Transmissao;

final class Transmissao
{
    private TipoTransmissaoAbstract $tipoTransmissao;

    public function __construct(TipoTransmissaoAbstract $tipoTransmissao)
    {
        $this->tipoTransmissao = $tipoTransmissao;
    }

    public function sistemaTransmissao(): TipoTransmissaoAbstract
    {
        return $this->tipoTransmissao;
    }

    public function getNomeSistemaTransmissao(): string
    {
        return $this->tipoTransmissao->getNomeTransmissao();
    }
}