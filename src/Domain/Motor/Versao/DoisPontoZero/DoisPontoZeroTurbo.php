<?php

namespace App\Domain\Motor\Versao\DoisPontoZero;

use App\Domain\Motor\MotorAbstract;

class DoisPontoZeroTurbo extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(2.0, 16, true, false);
    }
}