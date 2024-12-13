<?php

/*
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

// string -sequence of charater
$name = "shrey";
$friend = "joy";

echo "$name ka friend is $friend<br>"

//integer ->  Non decimal number
// Rnage -> 2^31-1 to -2^31-1
$number = 200;
echo "<br>";
echo $number;

//Float - Decimal Point Number
$income = 33.4;
echo $income;
echo "<br>";

// Boolean - can be either True or False
$x = true;
$is_friend = false;
echo $x;
echo "<br>";
echo $is_friend;
echo var_dump($x);

// Object - Instance of Classes
//Employe is class - Shrey is Object of the class of Employe

// Array
$friend = array("shrey", "joy", "Daksh", "Samarth")
echo var_dump($friend);
echo $friend[0];
echo "<br>";
echo $friend[1];
echo "<br>";
echo $friend[2];
echo "<br>";
echo $friend[3];
echo "<br>";
echo $friend[4];
echo "<br>";

// Null
$value = NULL;
echo var_dump($value);

?>