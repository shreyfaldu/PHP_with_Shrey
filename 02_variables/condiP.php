<?php

//find the maximum 
$arr = [10,20,30];
$max = $arr[0];
for($i = 0; $i < count($arr); $i++){
    if($arr[$i]>$max){
        $max = $arr[$i];
    }
}//echo $max;

//Even and Odd
$a = 5;
if($a%2==0){
   // echo "Even";
}else{
    //echo "Odd";
}

//find the value if it's presant or not
//by use array_search()

//gread calculator

$marks = 87;
if($marks>90){
    echo 'gread is: "A"';
}elseif($marks>70 && $marks<89){
    echo 'gread is: "B"';
}elseif($marks>50 && $marks<69){
    echo 'gread is "C"';
}else{
    echo "Failed";
};