<?php

namespace App\Domain\Marca\Fabricantes;

class Honda extends FabricanteAbstract
{
    public function __construct()
    {
        $reflection = new \ReflectionClass($this);
        parent::__construct($reflection->getShortName());
    }
}