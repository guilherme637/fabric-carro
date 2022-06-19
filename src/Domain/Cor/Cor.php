<?php

namespace App\Domain\Cor;

use App\Domain\Cor\Paleta\CorAbstract;

class Cor
{
    private CorAbstract $paleta;

    public function __construct(CorAbstract $paleta)
    {
        $this->paleta = $paleta;
    }

    public function getCor(): string
    {
        return $this->paleta->getPatela();
    }

    public function alterarCor(string $cor): void
    {
        $this->paleta->setPatela($cor);
    }
}