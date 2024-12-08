<?php

namespace App\AbstractFactory;

use App\AbstractFactory\BlueRobot;
use App\AbstractFactory\BlueRobotCreator;

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