<?php


class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        echo "The name of the fruit is {$this->name} and color is {$this->color}<br>";
    }
}

class Apple extends Fruit{
    public function copy(){
        echo "This is child class<br>";
        $this->intro();
    }
}


$apple = new Apple('apple','red');
$apple->copy();