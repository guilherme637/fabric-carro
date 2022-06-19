<?php

namespace App\Infrastructure\Service;

use App\Domain\CarroAbstract;
use App\Domain\Entity\Lote;
use App\Domain\ShortNameClass;
use Ds\Vector;

class FabricaService
{
    private Vector $carro;

    public function setCarro(Vector $carro)
    {
        $this->carro = $carro;
    }

    public function validaCarroInPatio(CarroAbstract $carro): void
    {
        $carroNoPatio = $this->findLote(get_class($carro));

        if (!$carroNoPatio->isEmpty()) {
            throw new \DomainException('Este carro ' . $carro->getNome() . ' ja existe no lote');
        }
    }

    public function aumentarLote(string $nomeCarro, int $quantidade): void
    {
        $this->getLote($nomeCarro)->adicionar($quantidade);
    }

    public function findLote(string $nomeCarro): Vector
    {
        return $this->carro->filter(function (Lote $lote) use ($nomeCarro) {
            return $lote->getCarro()->getNome() === ShortNameClass::getNameClass($nomeCarro);
        });
    }

    public function getLote(string $nomeCarro): Lote
    {
        return $this->findLote($nomeCarro)->first();
    }

    public function removerCarroLote(string $nomeClass): void
    {
        $this->getLote($nomeClass)->removerUm();
    }
}