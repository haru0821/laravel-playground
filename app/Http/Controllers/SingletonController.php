<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 생성_싱글턴
// 클래스의 인스턴스를 단 하나만 생성하는 것을 보증하는 패턴
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
        throw new \Exception("Cannot clone a singleton object");}

    // 만들어진 객체의 직렬화(serialize) 이후, 역직렬화(unserialize)할 때의 복원 방지
    public function __wakeup() {
        // 예외를 던져서 unserialize()를 방지
        throw new \Exception("Cannot unserialize a singleton object");}
}
