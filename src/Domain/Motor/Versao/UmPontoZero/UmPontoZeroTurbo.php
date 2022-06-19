<?php

namespace App\Domain\Motor\Versao\UmPontoZero;

use App\Domain\Motor\MotorAbstract;

class UmPontoZeroTurbo extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(1.0, 16, true, false);
    }
}