<?php

namespace App\Domain\Entity\Honda\Civic;

use App\Domain\CarroAbstract;
use App\Domain\Combustivel\Combustivel;
use App\Domain\Combustivel\TipoCombustivel\Flex;
use App\Domain\Cor\Cor;
use App\Domain\Cor\Paleta\Preto;
use App\Domain\Direcao\Direcao;
use App\Domain\Direcao\TipoDirecao\Eletrica;
use App\Domain\Freio\Freio;
use App\Domain\Freio\Sistema\Abs;
use App\Domain\Marca\Fabricantes\Honda;
use App\Domain\Marca\Marca;
use App\Domain\Modelo\Modelo;
use App\Domain\Modelo\TipoModelo\Sedan;
use App\Domain\Motor\Motor;
use App\Domain\Motor\Versao\DoisPontoZero\DoisPontoZeroAspirado;
use App\Domain\ShortNameClass;
use App\Domain\Transmissao\Tipo\Automatico;
use App\Domain\Transmissao\Transmissao;

class CivicSport extends CarroAbstract
{
    public function __construct()
    {
        parent::__construct(
            new Marca(new Honda()),
            new Cor(new Preto()),
            new Modelo(new Sedan(1779, 1433, 4641)),
            new Transmissao(new Automatico(7)),
            new Direcao(new Eletrica()),
            new Freio(new Abs()),
            new Combustivel(new Flex()),
            new Motor(new DoisPontoZeroAspirado())
        );
        $this->nome = ShortNameClass::getNameClass(__CLASS__);
    }
}