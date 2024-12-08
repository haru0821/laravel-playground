<?php

namespace App\DesignPattern\AbstractFactory;

use App\DesignPattern\AbstractFactory\BlueRobot;
use App\DesignPattern\AbstractFactory\BlueRobotCreator;

class BlueRobotFactory implements RobotBaseFactory
{
    public function createRobot()
    {
        return new BlueRobot();
    }

    public function createRobotCreator()
    {
        return new BlueRobotCreator();
    }
}