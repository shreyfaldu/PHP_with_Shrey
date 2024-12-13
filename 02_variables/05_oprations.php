<?php

/*
1. Arithmetic Operator
2. Assigment Operator
3. Comparison Operator
4. Logical Operator
*/

$a = 54;
$b = 6;

//1. Arithmetic Operator
echo "For a + b, the result is ".($a + $b)."<br>";
echo "For a - b, the result is ".($a - $b)."<br>";
echo "For a / b, the result is ".($a / $b)."<br>";
echo "For a * b, the result is ".($a * $b)."<br>";
echo "For a % b, the result is ".($a % $b)."<br>";
echo "For a ** b, the result is ".($a ** $b)."<br>";

//2.Assigment Operator
$x = $a;
echo "For x, the value is ".$x."<br>";

$a += 5;
echo "For a, the value is ".$a."<br>";

$a -= 5;
echo "For a, the value is ".$a."<br>";

$a *= 5;
echo "For a, the value is ".$a."<br>";

$a /= 5;
echo "For a, the value is ".$a."<br>";

$a %= 5;
echo "For a, the value is ".$a."<br>";

//3. Camparison Operator
$x = 4;
$y = 44;
echo "For x == y, the result is".var_dump($x==$y)."<br>";
echo "For x > y, the result is".var_dump($x > $y)."<br>";
echo "For x < y, the result is".var_dump($x < $y)."<br>";
echo "For x >= y, the result is".var_dump($x >= $y)."<br>";
echo "For x <= y, the result is".var_dump($x <= $y)."<br>";


//4. Logical Operator
$m = false;
$n = false;

echo "For and &m and &n".var_dump($m and $n)."<br>";
//&&
echo "For or &m or &n".var_dump($m or $n)."<br>";
// ||
?>
