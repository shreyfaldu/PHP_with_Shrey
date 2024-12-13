<?php
$a = 98;//Global variable
$b = 9;

function printValue(){
    //$a = 97;//Local variable
    global $a,$b;//Give the access of the Globle Variable
    $a = 1000;
    $b = 100;
    echo "the value oif num is: $a and $b <br>";
}
printValue();
echo "the value oif num is: $a and $b <br>";
echo $a;
echo var_dump($GLOBALS);
?>
