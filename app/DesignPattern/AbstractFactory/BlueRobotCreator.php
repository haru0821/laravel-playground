<?php

namespace App\DesignPattern\AbstractFactory;

class BlueRobotCreator implements RobotBaseCreator
{
    public function work()
    {
        echo '파란 로봇 일하기';
    }
}