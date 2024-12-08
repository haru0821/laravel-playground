<?php

namespace App\DesignPattern\AbstractFactory;

class RedRobot implements Robot
{
    public function say()
    {
        echo '빨간색 로봇';
    }
}