<?php

namespace App\DesignPattern\FactoryMethod;

use App\DesignPattern\FactoryMethod\IndiaCurry;

class IndiaCurryFactory extends CurryBaseFactory
{
    public function createCurry(int $spicy = 1): CurryBaseInterface
    {
        echo "인도식 카레 제작 개시";
        return new IndiaCurry($spicy);
    }
}
