<?php

namespace App\Domain;

use App\Domain\Entity\Lote;
use App\Infrastructure\Service\FabricaService;
use Ds\Vector;

abstract class FabricaAbstract
{
    protected Vector $carros;
    protected FabricaService $fabricaService;

    public function __construct(FabricaService $fabricaService)
    {
        $this->carros = new Vector();
        $fabricaService->setCarro($this->carros);
        $this->fabricaService = $fabricaService;
    }

    public function addCarro(CarroAbstract $carro, int $quantidade): void
    {
        $this->fabricaService->validaCarroInPatio($carro);
        $this->carros->push(new Lote($carro, $quantidade));
    }
}