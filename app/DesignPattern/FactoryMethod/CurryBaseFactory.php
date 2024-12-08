<?php

namespace App\DesignPattern\FactoryMethod;

// 카레의 종류가 늘어나도 해당 메서드의 수정X
abstract class CurryBaseFactory
{
    // 객체 생성을 위한 외부 호출용 메서드
    public function newOrderCurry(int $spicy): CurryBaseInterface
    {
        $curry = $this->createCurry();
        echo $curry->completeCurry($spicy); // 카레 완성
        return $curry;
    }

    // 실제 객체는 하위 클래스에서 정의
    protected abstract function createCurry(int $spicy): CurryBaseInterface;
}
