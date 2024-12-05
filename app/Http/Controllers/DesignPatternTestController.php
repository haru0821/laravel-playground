<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SingletonController;
use Illuminate\Http\Request;

class DesignPatternTestController extends Controller
{
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
}
