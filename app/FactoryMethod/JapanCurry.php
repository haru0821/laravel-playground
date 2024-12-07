<?php

namespace App\FactoryMethod;

class JapanCurry implements CurryBaseInterface
{
    public function completeCurry(int $spicy): string
    {
        // 일본 카레 제작 로직 작성
        return "맵기 " . $spicy . "레벨의 일본식 카레";
    }

    public function addEgg(): string
    {
        return "계란 토핑 추가";
    }
}
