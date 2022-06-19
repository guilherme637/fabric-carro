<?php

namespace App\Domain\Motor\Versao\UmPontoCinco;

use App\Domain\Motor\MotorAbstract;

class UmPontoCinco extends MotorAbstract
{
    public function __construct()
    {
        parent::__construct(1.5, 16, false, false);
    }
}