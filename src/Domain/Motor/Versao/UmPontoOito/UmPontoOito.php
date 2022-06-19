<?php

namespace App\Domain\Motor\Versao\UmPontoOito;

use App\Domain\Motor\MotorAbstract;

class UmPontoOito extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(1.8, 16, false, false);
    }
}