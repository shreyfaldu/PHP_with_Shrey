<?php

// array filter -> return the new array with given condition in the call back function

$num = [1,2,3,4,5];

$new_arr = array_filter($num,function($val){
    return $val % 2 == 0;
});
//print_r($new_arr);

//array map -> return the new array base on the call bak funtion

$num = [1,2,3,4,5];

$new_arr = array_map(function($val){
    return $val * 2;
},$num);
//print_r($num);

//array combine and array marge
//array combine use to make the associative array with key and valye pair
// array marge use tomrage the multipla array in oe array
$arr1 = [1,2,3];
$arr2 = ["shrey", "faldu"];

$arr3 = array_merge($arr1, $arr2);
//print_r($arr3);
$key = ["name", "age", "year"];
$value = ["shrey", 22, 2003];

$associative_arr = array_combine($key, $value);
//print_r($associative_arr);

//array split and array chunks
//array split
$num = [1,2,3,4,5];
$new_arr = array_splice($num, 1,2);
//print_r($new_arr);
echo "<br>";
//print_r($num);
$new = array_chunk($num , 2);
print_r($new);
