<?php

namespace App\DesignPattern\Proxy;

class RealSubject implements RealSubjectInterface
{
    public function work()
    {
        // 실제 처리 로직
        echo "일하는 중..";
        sleep(3);
    }
}