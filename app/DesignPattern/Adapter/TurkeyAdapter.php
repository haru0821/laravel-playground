<?php

namespace App\DesignPattern\Adapter;

use App\DesignPattern\Adapter\Turkey;
use App\DesignPattern\Adapter\Duck;

class TurkeyAdapter implements Duck
{
    public $turkey;

    public function TurkeyAdapter(Turkey $turkey) {
        $this->turkey = $turkey;
        $this->turkey->goddle();
    }

    public function quack() {
        $this->turkey->goddle();
    }
    
    public function fly() {
        for ($i=1; $i<=3; $i++) {
            $this->turkey->fly();
        }
    }
}