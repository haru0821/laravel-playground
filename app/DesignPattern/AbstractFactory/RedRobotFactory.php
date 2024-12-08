<?php

namespace App\DesignPattern\AbstractFactory;

use App\DesignPattern\AbstractFactory\RedRobot;
use App\DesignPattern\AbstractFactory\RedRobotCreator;

class RedRobotFactory implements RobotBaseFactory
{
    public function createRobot()
    {
        return new RedRobot();
    }

    public function createRobotCreator()
    {
        return new RedRobotCreator();
    }
}