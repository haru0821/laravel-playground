<?php

namespace App\FactoryMethod;

use App\FactoryMethod\JapanCurry;

class JapanCurryFactory extends CurryBaseFactory
{
    public function createCurry(int $spicy = 1): CurryBaseInterface
    {
        echo "일본식 카레 제작 개시";
        return new JapanCurry($spicy);
    }
}
