<?php

namespace App\Domain\Modelo;

use App\Domain\Modelo\Dimensao\DimensaoAbstract;

class ModeloAbstract
{
    protected string $nomeModelo;
    private bool $hasLimpadorParabrisaTraseiro;
    private DimensaoAbstract $dimensao;

    public function __construct(bool $hasLimpadorParabrisaTraseiro, DimensaoAbstract $dimensao)
    {
        $this->hasLimpadorParabrisaTraseiro = $hasLimpadorParabrisaTraseiro;
        $this->dimensao = $dimensao;
    }

    public function hasLimpadorParabrisaTraseiro(): bool
    {
        return $this->hasLimpadorParabrisaTraseiro;
    }

    public function setLimpadorParabrisaTraseiro(bool $hasLimpadorParabrisaTraseiro): void
    {
        $this->hasLimpadorParabrisaTraseiro = $hasLimpadorParabrisaTraseiro;
    }

    public function getDimensao(): DimensaoAbstract
    {
        return $this->dimensao;
    }

    public function getNomeModelo(): string
    {
        return $this->nomeModelo;
    }
}