<?php

namespace App\Domain\Motor;

class MotorAbstract
{
    private float $potencia;
    private int $valvulas;
    private bool $turbo;
    private bool $aspirado;

    public function __construct(float $potencia, int $valvulas,  bool $turbo, bool $aspirado)
    {
        $this->potencia = $potencia;
        $this->valvulas = $valvulas;
        $this->turbo = $turbo;
        $this->aspirado = $aspirado;
    }

    public function getPotencia(): float
    {
        return $this->potencia;
    }

    public function setPotencia(float $potencia): void
    {
        $this->potencia = $potencia;
    }

    public function getValvulas(): int
    {
        return $this->valvulas;
    }

    public function setValvulas(int $valvulas): void
    {
        $this->valvulas = $valvulas;
    }

    public function isTurbo(): bool
    {
        return $this->turbo;
    }

    public function setTurbo(bool $turbo): void
    {
        $this->turbo = $turbo;
    }

    public function isAspirado(): bool
    {
        return $this->aspirado;
    }

    public function setAspirado(bool $aspirado): void
    {
        $this->aspirado = $aspirado;
    }
}