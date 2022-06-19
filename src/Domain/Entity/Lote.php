<?php

namespace App\Domain\Entity;

use App\Domain\CarroAbstract;

class Lote
{
    private CarroAbstract $carro;
    private int $quantidade;

    public function __construct(CarroAbstract $carro, int $quantidade)
    {
        $this->carro = $carro;
        $this->quantidade = $quantidade;
    }

    public function adicionar(int $qtd): void
    {

        $this->quantidade += $qtd;
    }

    public function remover(int $qtd): void
    {
        $this->quantidade -= $qtd;
    }

    public function removerUm(): void
    {
        $this->quantidade -= 1;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getCarro(): CarroAbstract
    {
        return $this->carro;
    }
}