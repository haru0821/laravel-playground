<?php

namespace App\DesignPattern\FactoryMethod;

interface CurryBaseInterface
{
    // 카레 완성 로직은 필수
    public function completeCurry(int $spicy): string;
}