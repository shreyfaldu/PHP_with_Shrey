<?php
$a = 1234; // decimal number
$b = 0123; // octal number (equivalent to 83 decimal)
$c = 0o123; // octal number (as of PHP 8.1.0)
$d = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$e = 0b11111111; // binary number (equivalent to 255 decimal)
$f = 1_234_567; // decimal number (as of PHP 7.4.0)
// echo $a;
// echo "<br>";
// echo $b;
// echo "<br>";
// echo $c;
// echo "<br>";
// echo $d;
// echo "<br>";
// echo $e;
// echo "<br>";
// echo $f;
// echo "<br>";



// $large_number = 50000000000000000000;
// var_dump($large_number);         // float(5.0E+19)

// var_dump(PHP_INT_MAX + 1);       // 32-bit system: float(2147483648)
                                 // 64-bit system: float(9.2233720368548E+18)


// function foo($value){
//     return $value;
// }
// var_dump((int)foo(10.1));


// $array = array(5=>1,12=>5);
// $array[] = 19;
// $array["x"] = 20;
// var_dump($array);
// <?php
// $output = `ls -al`;
// echo "<pre>$output</pre>";
// 
// $a = 12 + "12";
// echo $a;
// echo "<br>";
// var_dump($a);
// echo "<br>";
// echo "Size of an integer: " . PHP_INT_SIZE . " bytes" . PHP_EOL;

$arr1 = [1,2,3];
print_r($arr1);
echo "<br>";
$arr2 = [...$arr1];
print_r($arr2);
echo "<br>";
$arr3 = [0,...$arr2];
print_r($arr3);
echo "<br>";
 ?> 