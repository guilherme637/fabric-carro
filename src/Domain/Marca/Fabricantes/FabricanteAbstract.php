<?php

namespace App\Domain\Marca\Fabricantes;

abstract class FabricanteAbstract
{
    private string $nomeFabricante;

    public function __construct(string $nomeFabricante)
    {
        $this->nomeFabricante = ucfirst($nomeFabricante);
    }

    public function getFabricante(): string
    {
        return $this->nomeFabricante;
    }
}