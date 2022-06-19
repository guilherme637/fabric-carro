<?php

namespace App\Infrastructure\Service;

use App\Domain\CarroAbstract;

final class FichaTecnicaService
{
    private CarroAbstract $carro;

    public function __construct(CarroAbstract $carroAbstract)
    {
        $this->carro = $carroAbstract;
    }

    final public function fichaTecnica(): void
    {
        $this->titulo();
        $this->modelo();
        $this->nome();
        $this->cor();
        $this->dimenssao();
        $this->sistemaTransmissao();
        $this->direcao();
        $this->sistemaFreio();
        $this->combustivel();
        $this->motor();
    }

    private function converterBooleanToString(bool $value): string
    {
        return $value ? 'SIM' : 'NÃO';
    }

    private function titulo(): void
    {
        echo "\t FICHA TECNICA \n";
        echo "=============================\n";
    }

    private function marca(): void
    {
        echo " MARCA:\n";
        echo "\t {$this->carro->getMarca()->getDescricao()} \n";
        echo "| _____________________ | \n";
    }

    public function nome(): void
    {
        echo " NOME DO CARRO:\n";
        echo "\t {$this->carro->getNome()} \n";
        echo "| _____________________ | \n";
    }

    private function cor(): void
    {
        echo "COR: \n";
        echo "\t {$this->carro->getCor()->getCor()} \n";
        echo "| _____________________ | \n";
    }

    private function modelo(): void
    {
        echo "MODELO:\n";
        echo "\t {$this->carro->getModelo()->getModelo()} \n";
        echo "| _____________________ | \n";
    }

    private function dimenssao(): void
    {
        echo "DIMENSSOES: \n";
        echo "\t COMPRIMENTO {$this->carro->getModelo()->getDimensoes()->getComprimento()} \n";
        echo "\t ALTUA {$this->carro->getModelo()->getDimensoes()->getAltura()} \n";
        echo "\t LARGURA {$this->carro->getModelo()->getDimensoes()->getLargura()} \n";
        echo "| _____________________ | \n";
    }

    private function sistemaTransmissao(): void
    {
        echo "SISTEMA DE TRANSMISSÃO: \n";
        echo "\t MODELO: {$this->carro->getTransmissao()->sistemaTransmissao()->getNomeTransmissao()} \n";
        echo "\t MARCHA: {$this->carro->getTransmissao()->sistemaTransmissao()->getQtdMarcha()} \n";
        echo "\t POSSUI EMBREAGEM: {$this->carro->getTransmissao()->sistemaTransmissao()->hasEmbreagem()} \n";
        echo "\t CORREIA: {$this->carro->getTransmissao()->sistemaTransmissao()->getCorreia()} \n";
        echo "| _____________________ | \n";
    }

    private function direcao(): void
    {
        echo "DIREÇÃO:\n";
        echo "\t {$this->carro->getDirecao()->getDirecao()} \n";
        echo "| _____________________ | \n";
    }

    private function sistemaFreio(): void
    {
        echo "SISTEMA DE FREIO:\n";
        echo "\t {$this->carro->getFreio()->getSistemaFreio()} \n";
        echo "| _____________________ | \n";
    }

    private function combustivel(): void
    {
        echo "COMBUSTÍVEL:\n";
        echo "\t {$this->carro->getCombustivel()->getCombustivel()} \n";
        echo "| _____________________ | \n";
    }

    private function motor()
    {
        echo "MOTOR: \n";
        echo "\t POTENCIA: " . number_format($this->carro->getMotor()->getPotencia(), 2) . "\n";
        echo "\t QUANTIDADE DE VALVULAS: {$this->carro->getMotor()->getValvulas()} \n";
        echo "\t TURBO: {$this->converterBooleanToString($this->carro->getMotor()->isTurbo())} \n";
        echo "\t ASPIRADO: {$this->converterBooleanToString($this->carro->getMotor()->isAspirado())} \n";
        echo "| _____________________ | \n";
    }
}