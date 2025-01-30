<?php

abstract class Animal{
    abstract public function makeSOutnd();
}

class Cat extends Animal{
    public function makeSOutnd(){
        echo "Mewo<br>";
    }
}

class Dog extends Animal{
    public function makeSOutnd(){
        echo "Bark<br>";
    }
}

$cat = new Cat();
$cat->makeSOutnd();

$dog = new Dog();
$dog->makeSOutnd();