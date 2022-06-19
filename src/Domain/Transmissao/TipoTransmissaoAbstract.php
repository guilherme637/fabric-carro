<?php

namespace App\Domain\Transmissao;

use App\Domain\Transmissao\Correia\TipoCorreiaAbstract;

abstract class TipoTransmissaoAbstract
{
    protected string $nomeTransmissao;
    protected int $qtdMarcha;
    protected TipoCorreiaAbstract $correia;
    protected bool $hasEmbreagem;

    public function __construct(int $qtdMarcha, TipoCorreiaAbstract $correia, bool $hasEmbreagem)
    {
        $this->correia = $correia;
        $this->qtdMarcha = $qtdMarcha;
        $this->hasEmbreagem = $hasEmbreagem;
    }

    public function getQtdMarcha(): int
    {
        return $this->qtdMarcha;
    }

    public function getCorreia(): string
    {
        return $this->correia->getTipoCorreia();
    }

    public function hasEmbreagem(): bool
    {
        return $this->hasEmbreagem;
    }

    public function getNomeTransmissao(): string
    {
        return $this->nomeTransmissao;
    }
}