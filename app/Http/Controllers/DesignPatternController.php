<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PrototypeController;
use App\Http\Controllers\SingletonController;
use App\FactoryMethod\JapanCurryFactory;
use App\FactoryMethod\IndiaCurryFactory;
use Illuminate\Http\Request;

class DesignPatternController extends Controller
{
    // 생성_싱글턴
    // 클래스의 인스턴스를 단 하나만 생성하는 것을 보증하는 패턴
    public function singleton () {
        $singleton1 = SingletonController::getInstance();
        $singleton2 = SingletonController::getInstance();
        var_dump($singleton1 === $singleton2); // true
        // 역직렬화 방지
        $serialized = serialize($singleton1);
        $unserialized = unserialize($serialized); // error
        // 복제 방지
        $cloneInstance = clone $singleton1; // error
    }

    // 생성_프로토타입
    // 객체 생성 시, 기존 객체를 복사해 새로운 객체를 생성하는 패턴
    public function prototype () {
        $defaultPrototype = new PrototypeController();
        $prototype1 = clone $defaultPrototype; // 프로토타입1
        $prototype2 = clone $defaultPrototype; // 프로토타입2
        $prototype1->info = '프로토타입1의 정보';
        $prototype2->info = '프로토타입2의 정보';
        var_dump($prototype1);
        var_dump($prototype2);
    }

    // 생성_팩토리메서드
    // 객체 생성을 팩토리 클래스(서브 클래스)로 대체해서 생성하는 패턴
   public function factoryMethod () {
        // 원하는 객체의 팩토리 객체 생성 후, 팩토리 객체를 통해 각각의 객체를 생성
        $japanCurryFactory = new JapanCurryFactory();
        $japanCurry = $japanCurryFactory->newOrderCurry(3); // 맵기 3의 일본식 카레 주문
        $indiaCurryFactory = new IndiaCurryFactory();
        $indiaCurry = $indiaCurryFactory->newOrderCurry(5); // 맵기 5의 인도식 카레 주문
        echo $indiaCurry->addNaan(); // 인도 난 추가
   }
}
