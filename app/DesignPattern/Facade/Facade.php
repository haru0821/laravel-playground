<?php

namespace App\DesignPattern\Facade;

use App\DesignPattern\Facade\ErrorMessage;
use App\DesignPattern\Facade\SendMail;
use App\DesignPattern\Facade\Log;

class Facade
{
    private $errorMessage;
    private $sendMail;
    private $log;

    public function __construct()
    {
        $this->errorMessage = new ErrorMessage();
        $this->sendMail = new SendMail();
        $this->log = new Log();
    }
    
    public function run()
    {
        $this->errorMessage->setMessage();
        $this->sendMail->send();
        $this->log->output();
    }
}
