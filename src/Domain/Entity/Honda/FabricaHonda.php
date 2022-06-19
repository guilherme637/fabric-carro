<?php

namespace App\Domain\Entity\Honda;

use App\Domain\CarroAbstract;
use App\Domain\FabricaAbstract;
use App\Domain\Marca\Fabricantes\Honda;
use App\Infrastructure\Service\FichaTecnicaService;
use Ds\Vector;

class FabricaHonda extends FabricaAbstract
{
    public function addCarro(CarroAbstract $carro, int $quantidade): void
    {
        if (!$carro->getMarca()->getFabricante() instanceof Honda) {
            throw new \DomainException("O {$carro->getNome()} não pertence a esse fabricante");
        }

        parent::addCarro($carro, $quantidade);
    }

    public function getPatio(): Vector
    {
        return $this->carros->copy();
    }

    public function fichaTecnica(string $nomeCarro): void
    {
        $carroCatalago = $this->fabricaService->findLote($nomeCarro);

        if ($carroCatalago->isEmpty()) {
            throw new \DomainException('Carro não encontrado.');
        }

        (new FichaTecnicaService($carroCatalago->first()->getCarro()))->fichaTecnica();
    }
}