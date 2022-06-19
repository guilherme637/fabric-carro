<?php

namespace App\Domain\Motor\Versao\DoisPontoZero;

use App\Domain\Motor\MotorAbstract;

class DoisPontoZeroAspirado extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(2.0, 16, false, true);
    }
}