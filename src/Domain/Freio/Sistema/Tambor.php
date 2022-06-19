<?php

namespace App\Domain\Freio\Sistema;

use App\Domain\Freio\SistemaAbstract;

class Tambor extends SistemaAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}