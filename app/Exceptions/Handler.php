<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use PDOException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Psr\Log\LogLevel;

class Handler extends ExceptionHandler
{

    // 출력되는 로그의 레벨을 지정 가능
    protected $levels = [
        PDOException::class => LogLevel::CRITICAL,
    ];


    // 로그를 남기지 않고자 하는 예외 클래스의 리스트를 정의 (ex. csrf토큰, 패스워드 체크)
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];


    // 애플리케이션 실행 시, 예외처리(전역 설정) 등록 시 사용 (예외가 발생과 무관하게 반드시 세팅)
    public function register()
    {
        // 처리 순서는 reportable->report->renderable->render순으로, 
        // reportable, renderable에 return처리가 있을 경우 report, render가 실행이 안됨

        // 예외 로깅 및 보고 관련 로직 정의
        $this->reportable(function (ValidationException $e) {
            Log::error('Validation failed: ' . $e->getMessage());
         });

        // 예외에 대한 응답 관련 로직 정의
         $this->renderable(function (ValidationException $e) {
            return response()->json(['message' => $e->errors()], 422);
         });
    }
    
}
