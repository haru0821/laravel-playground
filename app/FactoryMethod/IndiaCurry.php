<?php

namespace App\FactoryMethod;

class IndiaCurry implements CurryBaseInterface
{
    public function completeCurry(int $spicy): string
    {
        // 인도 카레 제작 로직 작성
        return "맵기 " . $spicy . "레벨의 인도식 카레";
    }
    
    public function addNaan(): string
    {
        return "난 추가";
    }
}
