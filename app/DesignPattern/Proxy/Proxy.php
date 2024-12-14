<?php

namespace App\DesignPattern\Proxy;

use App\DesignPattern\Proxy\RealSubject;

class Proxy implements RealSubjectInterface
{
    private $realSubject;

    public function __construct ()
    {
        // 처리하고자 하는 클래스를 인스턴스화
        $this->realSubject = new RealSubject();
    }

    public function work()
    {
        // 전처리 작업
        echo "일하기 전 사전 작업";
        sleep(2);
        // 객체의 메서드를 실행
        $this->realSubject->work();
    }
}