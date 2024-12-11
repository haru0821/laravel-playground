<?php

namespace App\DesignPattern\Adapter;

class WildTurkey implements Turkey
{
  public function goddle() {
    echo 55;
  }

  public function fly() {
    echo 66;
  }

}