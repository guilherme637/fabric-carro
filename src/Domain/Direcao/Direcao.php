<?php

namespace App\Domain\Direcao;

final class Direcao
{
    private AcaoAbstract $acao;

    public function __construct(AcaoAbstract $acao)
    {
        $this->acao = $acao;
    }

    public function getDirecao(): string
    {
        return $this->acao->getTipo();
    }
}