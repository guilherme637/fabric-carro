<?php

use App\Domain\Entity\Honda\Civic\CivicEx;
use App\Domain\Entity\Honda\Civic\CivicExl;
use App\Domain\Entity\Honda\Civic\CivicSport;
use App\Domain\Entity\Honda\Civic\CivicTouring;
use App\Domain\Entity\Honda\FabricaHonda;
use App\Infrastructure\Service\FabricaService;

require 'vendor/autoload.php';

$honda = new FabricaHonda(new FabricaService());

$honda->addCarro(new CivicEx(), 100);
$honda->addCarro(new CivicExL(), 100);
$honda->addCarro(new CivicSport(), 100);
$honda->addCarro(new CivicTouring(), 100);
$honda->fichaTecnica(CivicTouring::class);
