<?php

namespace Tests\Unit;

use App\Services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    // php artisan make:test {테스트파일명} --unit 으로 생성
    // php aritsan test 를 통해서 tests 디렉토리 내부 테스트 항목 전부 실행
    // vendor/bin/phpunit tests/Unit/CalculatorServiceTest.php 와 같이 특정 파일 지정해서 테스트 실행 가능

    public function testAdd()
    {
        $calculator = new CalculatorService();

        // 덧셈
        $result = $calculator->add(5, 7);

        // 예상 결과
        $this->assertEquals(12, $result);
    }

    // 메서드명의 앞에 test를 붙이지 않으면 테스트 케이스로 인식안함
    // /** @test */ 주석이 있을 경우, test를 붙이지 않아도 테스트 케이스로써의 역할 가능
    /** @test */
    public function addTest()
    {
        $calculator = new CalculatorService();

        // 덧셈
        $result = $calculator->add(4, 8);

        // 예상 결과
        $this->assertEquals(12, $result);
    }

    public function testSubtract()
    {
        $calculator = new CalculatorService();

        // 뺄셈
        $result = $calculator->subtract(6, 8);

        // 예상 결과
        $this->assertEquals(-2, $result);
    }

    public function testMultiply()
    {
        $calculator = new CalculatorService();

        // 곱셈
        $result = $calculator->multiply(5, 5);

        // 예상 결과
        $this->assertEquals(25, $result);
    }

    public function testDivide()
    {
        $calculator = new CalculatorService();

        // 나눗셈
        $result = $calculator->divide(9, 3);

        // 예상 결과
        $this->assertEquals(3, $result);
    }

    public function testZeroDivide()
    {
        $calculator = new CalculatorService();

        // 0으로 나눌 경우의 예상 에러
        $this->expectException(\InvalidArgumentException::class);

        // 나눗셈
        $calculator->divide(5, 0);
    }
}
