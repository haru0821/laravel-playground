<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SingletonController;
use Illuminate\Http\Request;

class DesignPatternTestController extends Controller
{
    // 싱글턴 패턴
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

    // 프로토타입 패턴
    public function prototype () {
        $defaultPrototype = new PrototypeController();
        $prototype1 = clone $defaultPrototype; // 프로토타입1
        $prototype2 = clone $defaultPrototype; // 프로토타입2
        $prototype1->info = '프로토타입1의 정보';
        $prototype2->info = '프로토타입2의 정보';
        var_dump($prototype1);
        var_dump($prototype2);
    }
}
