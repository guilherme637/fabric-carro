<?php

namespace App\Domain;

use Ds\Vector;

abstract class FabricaAbstract
{
    protected Vector $carros;

    public function __construct()
    {
        $this->carros = new Vector();
    }

    abstract public function addCarro(CarroAbstract $carro): void;
}