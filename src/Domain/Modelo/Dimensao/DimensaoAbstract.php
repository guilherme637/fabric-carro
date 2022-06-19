<?php

namespace App\Domain\Modelo\Dimensao;

class DimensaoAbstract
{
    private int $largura;
    private int $altura;
    private int $comprimento;

    public function __construct(int $largura, int $altura, int $comprimento)
    {
        $this->largura = $largura;
        $this->altura = $altura;
        $this->comprimento = $comprimento;
    }

    public function getLargura(): int
    {
        return $this->largura;
    }


    public function getAltura(): int
    {
        return $this->altura;
    }

    public function getComprimento(): int
    {
        return $this->comprimento;
    }
}