<?php

namespace App\AbstractFactory;

class BlueRobot implements Robot
{
    public function say()
    {
        echo '파란색 로봇';
    }
}