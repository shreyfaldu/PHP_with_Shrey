<?php

class Fruit{
    public function copy(){
        echo "This is the Parent class<br>";
    }
}

class Apple extends Fruit{
    public function copy(){
        echo "This is apple class<br>";
    }
}

class Banana extends Fruit{
    public function copy(){
        echo "This is Banana class<br>";
    }
}

class Cherry extends Fruit{
    public function copy(){
        echo "This is cherry class<br>";
    }
}


$apple = new Apple();
$apple->copy();

$banana = new Banana();
$banana->copy();

$cherry = new Cherry();
$cherry->copy();