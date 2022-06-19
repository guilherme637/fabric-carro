<?php

namespace App\Domain\Freio\Sistema;

use App\Domain\Freio\SistemaAbstract;
use App\Domain\ShortNameClass;

class Abs extends SistemaAbstract
{
    public function __construct()
    {
        parent::__construct(ShortNameClass::getNameClass(__CLASS__));
    }
}