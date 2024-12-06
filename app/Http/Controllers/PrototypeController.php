<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 생성_프로토타입
// 객체 생성 시, 기존 객체를 복사해 새로운 객체를 생성하는 패턴
class PrototypeController extends Controller
{
    public $info = "정보 없음";

    public function __construct()
    {
        // clone을 하는 경우, 초기화 작업을 생략하고 이미 만들어진 객체를 그대로 사용
        // 생성자 내부의 로직이 복잡할 때, 프로토타입 패턴을 사용하는 것이 효율적
    }

    public function __clone() {}
}