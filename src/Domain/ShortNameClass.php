<?php

namespace App\Domain;

class ShortNameClass
{
    public static function getNameClass(string $nomeClass): string
    {
        $reflaction = new \ReflectionClass($nomeClass);

        return $reflaction->getShortName();
    }
}