<?php

namespace App\Domain\Entity;

use App\Domain\CarroAbstract;
use App\Domain\FabricaAbstract;
use App\Domain\Marca\Fabricantes\Honda;

class FabricaHonda extends FabricaAbstract
{
    public function addCarro(CarroAbstract $carro): void
    {
        if (!$carro->getMarca()->getFabricante() instanceof Honda) {
            throw new \DomainException("O {$carro->getNome()} não pertence a esse fabricante");
        }

        $this->carros->push($carro);
    }

    public function getPatio()
    {
        return $this->carros;
    }
}