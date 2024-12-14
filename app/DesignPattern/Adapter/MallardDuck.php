<?php

namespace App\DesignPattern\Adapter;

class MallardDuck implements Duck
{
  public function quack()
  {
    echo 'MallardDuck : quack';
  }

  public function fly()
  {
    echo 'MallardDuck : fly';
  }

}