<?php

namespace App\DesignPattern\AbstractFactory;

class BlueRobot implements Robot
{
    public function say()
    {
        echo '파란색 로봇';
    }
}