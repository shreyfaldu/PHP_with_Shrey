<?php

interface Fruit{
    public function name();
    public function color();
}

class Apple implements Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function name(){
        echo "The name of fruit is {$this->name}";
    }
    public function color(){
        echo "The color of fruit is {$this->color}";
    }
}

$apple = new Apple('apple','red');
$apple->name();
$apple->color();
