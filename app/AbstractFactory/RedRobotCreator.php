<?php

namespace App\AbstractFactory;

class RedRobotCreator implements RobotBaseCreator
{
    public function work()
    {
        echo '빨강 로봇 일하기';
    }
}