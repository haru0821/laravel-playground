<?php

namespace App\Exceptions;

use Exception;

class CustomValidationException extends Exception
{
    // 애플리케이션 실행 후, 지정한 예외가 발생할 때의 에러 보고 및 로깅 처리 (예외가 발생할 때마다)
    public function report(Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            return false;
        }

        parent::report($exception);
    }

    // 애플리케이션 실행 후, 지정한 예외가 발생할 때의 응답 처리 (예외가 발생할 때마다)
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            return response()->view('errors.error-page', [], 400);
        }

        return parent::render($request, $exception);
    }
}
