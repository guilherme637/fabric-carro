<?php

namespace App\Domain\Cor\Paleta;

class CorAbstract
{
    private string $patela;

    public function __construct(string $cor)
    {
        $this->patela = ucfirst($cor);
    }

    public function getPatela(): string
    {
        return $this->patela;
    }

    public function setPatela(string $patela): void
    {
        $this->patela = $patela;
    }
}