<?php

abstract class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    abstract function intro();
}

class Apple extends Fruit{
    public function intro(){
        echo "The name of fruit is {$this->name} and the color of fruit is {$this->color}<br>";
    }
}

class Banana extends Fruit{
    public function intro(){
        echo "The name of fruit is {$this->name} and the color of fruit is {$this->color}<br>";
    }
}

$apple = new Apple('apple', 'red');
$apple->intro();

$banana = new Banana('Banana', 'Yellow');
$banana->intro();