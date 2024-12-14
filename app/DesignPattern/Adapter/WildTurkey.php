<?php

namespace App\DesignPattern\Adapter;

class WildTurkey implements Turkey
{
  public function goddle()
  {
    echo 'WildTurkey : gooddle';
  }

  public function fly()
  {
    echo 'WildTurkey : fly';
  }

}