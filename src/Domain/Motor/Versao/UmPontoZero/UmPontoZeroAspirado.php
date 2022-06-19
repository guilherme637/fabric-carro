<?php

namespace App\Domain\Motor\Versao\UmPontoZero;

use App\Domain\Motor\MotorAbstract;

class UmPontoZeroAspirado extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(1.0, 16, false, true);
    }
}