<?php

namespace App\Domain\Marca;

use App\Domain\Marca\Fabricantes\FabricanteAbstract;

class Marca
{
    private FabricanteAbstract $fabricante;

    public function __construct(FabricanteAbstract $fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function getFabricante(): FabricanteAbstract
    {
        return $this->fabricante;
    }

    public function getDescricao(): string
    {
        return $this->fabricante->getFabricante();
    }
}