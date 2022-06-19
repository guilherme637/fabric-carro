<?php

namespace App\Domain\Motor\Versao\UmPontoCinco;

use App\Domain\Motor\MotorAbstract;

class UmPontoCincoTurbo extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(1.5, 16, true, false);
    }
}