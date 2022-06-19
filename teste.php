<?php

use App\Domain\Entity\FabricaHonda;
use App\Domain\Entity\Honda\Civic\CivicEx;

require 'vendor/autoload.php';

$civic = new CivicEx();
$honda = new FabricaHonda();

$honda->addCarro($civic);

print_r($honda);