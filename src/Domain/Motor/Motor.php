<?php

namespace App\Domain\Motor;

final class Motor
{
    private MotorAbstract $motorAbstract;

    public function __construct(MotorAbstract $motorAbstract)
    {
        $this->motorAbstract = $motorAbstract;
    }

    public function getMotor(): MotorAbstract
    {
        return $this->motorAbstract;
    }

    public function getPotencia(): float
    {
        return $this->motorAbstract->getPotencia();
    }

    public function getValvulas(): int
    {
        return $this->motorAbstract->getValvulas();
    }

    public function isTurbo(): bool
    {
        return $this->motorAbstract->isTurbo();
    }

    public function isAspirado(): bool
    {
        return $this->motorAbstract->isAspirado();
    }
}