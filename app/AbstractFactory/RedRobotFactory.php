<?php

namespace App\AbstractFactory;

use App\AbstractFactory\RedRobot;
use App\AbstractFactory\RedRobotCreator;

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