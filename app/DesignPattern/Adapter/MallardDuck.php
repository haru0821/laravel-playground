<?php

namespace App\DesignPattern\Adapter;

class MallardDuck implements Duck
{
  public function quack() {
    echo 33;
  }

  public function fly() {
    echo 44;
  }

}