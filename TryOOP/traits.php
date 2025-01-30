<?php

trait massege1{
   function hello(){
        echo "hello";
   }
}

trait massege2{
    function world(){
        echo "world";
    }
}

class msg{
    use massege1, massege2;
}

$tr = new msg();
echo $tr->hello() . ":" . $tr->world();