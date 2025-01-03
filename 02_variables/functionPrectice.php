<?php
//find the fecto
function fecto($number){
    if($number < 0){
        echo "Invaild to find the fecto<br>";
    }elseif($number === 0 || $number === 1){
        return 1;
    }else{
        $result = 1;
        for ($i=2; $i <= $number; $i++) { 
            $result *= $i;
        }
    }
    return $result;
}
//echo "value of facto is: " . fecto(5);

//prime number or not
function prime($num){
    if($num <= 1){
        return false;
    }
    for($i = 2 ; $i < ($num/2); $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}
$num = 7;
if(prime($num)){
    //echo "prime Number";
}else{
    echo "Not a Prime number";
}

//find the maximum 
function maxNum($arr){
    if(empty($arr)){
        echo "Array is Empty";
    }else{
        $max = $arr[0];
        foreach($arr as $value){
            if($value>$max){
                $max = $value;
            }
        }
    }
    return $max;
}

$arr = [10,20,30,40];
//echo "The maximum value is: " . maxNum($arr);

//check if the number is pelingdrom or not
function peli($number){
    $originalNumber = $number;
    $reversNumber = 0;
    while($number > 0){
        $reminder = $number % 10;
        $reversNumber = ($reversNumber * 10) + $reminder;
        $number = intval($number / 10);
    }
    return $originalNumber == $reversNumber;
}
$number = 123454321;
if(peli($number)){
    //echo "Is a pelingdrom number";
}else{
    echo "No is not pelingdrom number";
}

//fibonacci series
function generateFibonacci($n){
    if($n <= 0){
        return [];
    }
    $fib = [0,1];
    for($i = 2; $i < $n; $i++){
        $fib[] = $fib[$i-2] + $fib[$i-1];
    }
    return array_slice($fib, 0, $n);
}
$n = 10;
$fibonacci = generateFibonacci($n);
//echo "The Fibonacci series is: " . implode(",",$fibonacci);

//sort the array
function issort($arr){
    $n = count($arr);
    for($i = 0; $i < $n ; $i++){
        for($j = 0; $j < $n ; $j++){
            if($arr[$j] > $arr[$j + 1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [2,44,78,1,54];
$sortArray = issort($arr);
echo "The sort Arrya is: " . implode(",",$sortArray);