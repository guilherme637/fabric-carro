<?php

namespace App\Domain;

use App\Domain\Combustivel\Combustivel;
use App\Domain\Cor\Cor;
use App\Domain\Direcao\Direcao;
use App\Domain\Freio\Freio;
use App\Domain\Marca\Marca;
use App\Domain\Modelo\Modelo;
use App\Domain\Motor\Motor;
use App\Domain\Transmissao\Transmissao;

class CarroAbstract
{
    protected string $nome;
    protected Marca $marca;
    protected Cor $cor;
    protected Modelo $modelo;
    protected Transmissao $transmissao;
    protected Direcao $direcao;
    protected Freio $freio;
    protected Combustivel $combustivel;
    protected Motor $motor;

    public function __construct(
        Marca $marca,
        Cor $cor,
        Modelo $modelo,
        Transmissao $transmissao,
        Direcao $direcao,
        Freio $freio,
        Combustivel $combustivel,
        Motor $motor
    ) {
        $this->modelo = $modelo;
        $this->transmissao = $transmissao;
        $this->direcao = $direcao;
        $this->freio = $freio;
        $this->combustivel = $combustivel;
        $this->motor = $motor;
        $this->marca = $marca;
        $this->cor = $cor;
    }

    public function getModelo(): Modelo
    {
        return $this->modelo;
    }

    public function setModelo(Modelo $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getTransmissao(): Transmissao
    {
        return $this->transmissao;
    }

    public function getDirecao(): Direcao
    {
        return $this->direcao;
    }

    public function setDirecao(Direcao $direcao): void
    {
        $this->direcao = $direcao;
    }

    public function getFreio(): Freio
    {
        return $this->freio;
    }

    public function setFreio(Freio $freio): void
    {
        $this->freio = $freio;
    }

    public function getCombustivel(): Combustivel
    {
        return $this->combustivel;
    }

    public function setCombustivel(Combustivel $combustivel): void
    {
        $this->combustivel = $combustivel;
    }

    public function getMotor(): Motor
    {
        return $this->motor;
    }

    public function setMotor(Motor $motor): void
    {
        $this->motor = $motor;
    }

    public function getMarca(): Marca
    {
        return $this->marca;
    }

    public function setMarca(Marca $marca): void
    {
        $this->marca = $marca;
    }

    public function getCor(): Cor
    {
        return $this->cor;
    }

    public function setCor(Cor $cor): void
    {
        $this->cor = $cor;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}