<?php

namespace App\Http\Controllers;

use App\DesignPattern\AbstractFactory\BlueRobotFactory;
use App\DesignPattern\AbstractFactory\RedRobotFactory;
use App\DesignPattern\Adapter\MallardDuck;
use App\DesignPattern\Adapter\WildTurkey;
use App\DesignPattern\Adapter\TurkeyAdapter;
use App\DesignPattern\Builder\Builder;
use App\DesignPattern\FactoryMethod\JapanCurryFactory;
use App\DesignPattern\FactoryMethod\IndiaCurryFactory;
use App\DesignPattern\Prototype\Prototype;
use App\DesignPattern\Singleton\Singleton;
use App\Http\Controllers\PrototypeController;
use Illuminate\Http\Request;

class DesignPatternController extends Controller
{
    // 생성_싱글턴
    // 클래스의 인스턴스를 단 하나만 생성하는 것을 보증하는 패턴
    public function singleton () {
        $singleton1 = Singleton::getInstance();
        $singleton2 = Singleton::getInstance();
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
        $defaultPrototype = new Prototype();
        $prototype1 = clone $defaultPrototype; // 프로토타입1
        $prototype2 = clone $defaultPrototype; // 프로토타입2
        $prototype1->info = '프로토타입1의 정보';
        $prototype2->info = '프로토타입2의 정보';
        var_dump($defaultPrototype === $prototype1); // false
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

    // 생성_추상팩토리
    // 서로 관련이 있는 객체를 만들기 위한 추상클래스(or 인터페이스)를 제공하는 패턴
    public function abstractFactory () {
        // 관련 객체를 만들기 위한 팩토리 객체 생성
        $blueRobotFactory = new BlueRobotFactory();
        // 팩토리 객체로부터 객체1 생성
        $blueRobot = $blueRobotFactory->createRobot();
        // 팩토리 객체로부터 객체2 생성
        $blueRobotCreator = $blueRobotFactory->createRobotCreator();
        // 객체별 처리 실행
        $blueRobot->say();
        $blueRobotCreator->work();

        $redRobotFactory = new RedRobotFactory();
        $redRobot = $redRobotFactory->createRobot();
        $redRobotCreator = $redRobotFactory->createRobotCreator();
        $redRobot->say();
        $redRobotCreator->work();
   }

    // 생성_빌더
    // 객체 생성의 복잡한 과정을 분리하는 패턴
    public function builder () {
        // 생성자에서 데이터를 세팅한다면, 직관성 및 유연성이 부족하다
        // $builder = new Builder(1, 30, 5, 'Haru');

        // 메서드 체이닝 방식을 통해, 해당 객체가 어떤 데이터를 요하는지 직관적으로 파악 가능
        // 각 데이터별 가공, 조건 등의 추가 로직을 분리해서 관리 가능
        $builder = new Builder();
        $builder = $builder->setId(1)
                    ->setAge(30)
                    ->setGrade(5)
                    ->setName('Haru');

        echo $builder->getName(); // Haru
    }

    // 구조_어댑터 (= Wrapper)
    // 호환되지 않는 인터페이스를 가진 클래스가 서로 통신할 수 있도록 해주는 구조적인 패턴
    public function adapter () {
        // Duck을 생성
        $duck = new MallardDuck();
        // Turkey를 생성
        $turkey = new WildTurkey();
        // 생성한 Turkey를 어댑터를 통하여 Duck 을 이용하도록 변환
        $turkeyAdapter = new TurkeyAdapter($turkey);
        
        $turkey->goddle(); echo "<br>";
        $turkey->fly(); echo "<br>";
        $duck->quack(); echo "<br>";
        $duck->fly(); echo "<br>";
        $turkeyAdapter->quack(); echo "<br>";
        $turkeyAdapter->fly(); echo "<br>";
    }

}
