<?php

trait massege1{
    function hello(){
        echo "hello";
    }
}

trait massege2{
    function world(){
        echo " World";
    }
}

class msg{
    use massege1, massege2;
}

$name = new msg();
$name->hello();
$name->world();