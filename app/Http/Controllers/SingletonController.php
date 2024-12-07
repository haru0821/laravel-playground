<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingletonController extends Controller
{
    private static $instance = null;

    // 생성자 private로 (new 키워드로 인스턴스화 막기 위해)
    private function __construct() {}

    // 인스턴스화는 해당 메소드로만 가능
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new SingletonController();
        }
        return self::$instance;
    }

    // 만들어진 객체의 외부 복제 방지
    public function __clone() {
        // 예외를 던져서 clone을 방지
        throw new \Exception("복제할 수 없는 오브젝트 입니다!");
    }

    // 만들어진 객체의 직렬화(serialize) 이후, 역직렬화(unserialize)할 때의 복원 방지
    public function __wakeup() {
        // 예외를 던져서 unserialize()를 방지
        throw new \Exception("역직렬화할 수 없는 오브젝트 입니다!");
    }
}
