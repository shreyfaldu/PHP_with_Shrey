<?php

class Fruit{
    private $name;

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        echo "the name is {$this->name}";
    }
}

$apple = new Fruit();
$apple->set_name('apple');
$apple->get_name();