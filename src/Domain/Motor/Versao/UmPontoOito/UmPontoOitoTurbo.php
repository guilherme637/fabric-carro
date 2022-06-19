<?php

namespace App\Domain\Motor\Versao\UmPontoOito;

use App\Domain\Motor\MotorAbstract;

class UmPontoOitoTurbo extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(1.8, 16, true, false);
    }
}