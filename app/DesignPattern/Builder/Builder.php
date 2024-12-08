<?php

namespace App\DesignPattern\Builder;

class Builder
{
    private $id;
    private $age;
    private $grade;
    private $name;

    // 기존
    // private function __construct($id, $age, $grade, $name) {
    //     $this->id = $id;
    //     $this->age = $age;
    //     $this->grade = $grade;
    //     $this->name = $name;
    // }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }
    
    public function setGrade($grade) {
        $this->grade = $grade;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function getName() {
        return $this->name;
    }

}
