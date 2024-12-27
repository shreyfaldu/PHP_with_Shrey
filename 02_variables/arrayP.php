<?php

// $array = [10,20,30];
// echo "The sum is: ".array_sum($array);


// Create an associative array
// $students = [
//     "Alice" => 85,
//     "Bob" => 92,
//     "Charlie" => 78,
//     "David" => 88
// ];

// // Find the student with the highest score
// $topStudent = array_search(max($students), $students);
// echo "The top student is: " . $topStudent;

// $array = [
//     "Team A" => ["shrey", "sam"],
//     "Team B" => ["Daksh", "joy"],
//     "Team C" => ["Raj", "Dev"],
// ];
// foreach($array as $arr => $avlue){
//     echo "Players in $arr: " . implode(", ", $value) . "\n";
// }

// $array = [10,9,11,8,20];

// $filter_array = array_filter($array, function($num){
//     return $num >= 10;
// });
// print_r($filter_array);

// $numbers = [10,2,3,4,5,6];

// array_splice($numbers,0,2);

// print_r($numbers);

// $num = [1,2,3,4];

// $new_Arr = array_map(function($val){
//     return $val * 2;
// },$num);
// print_r($new_Arr);


//Difference between Arrya_map and array_filter

//insert the value in array
$arr = [1,2,3,4,5];
//$arr[] = 6;
//print_r($arr);

array_push($arr,6);
//print_r($arr);
array_unshift($arr,0);
//print_r($arr);
array_splice($arr,2,0,3);
//print_r($arr);

$arr1 = [
    "one" => 1,
    "Two" => 2
];
$arr2 = [
    "Three" => 3,
    "Four" => 4
];
$arr3 = array_merge($arr1,$arr2);
//print_r($arr3);
//direct
//array_push(arrayname,element)
//if the first position array_unshift(arrayname, element)
//using the splice array_splice(arrayname,position,0,element)
//array_merge(arrayOne, arrayTwo)


//find the index of the element in array -> array_search()
$arr4 =[1,2,3,4,5];
$max = $arr4[0];
for ($i=0; $i < 5; $i++) { 
    if($arr4[$i]>$max){
        $max = $arr[$i];
    }
    echo $max;
}