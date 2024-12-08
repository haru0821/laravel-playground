<?php

namespace App\DesignPattern\AbstractFactory;

interface RobotBaseFactory
{
    public function createRobot();
    public function createRobotCreator();
}