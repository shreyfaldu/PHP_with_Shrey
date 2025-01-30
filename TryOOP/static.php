<?php

class Fruit{
    public static function apple(){
        echo "this is the apple class<br>";
    }

    public function __construct(){
        echo "This is banana class<br>";
        self::apple();
    }
}
new Fruit;