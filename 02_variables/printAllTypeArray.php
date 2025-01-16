<?php
//print all type arrya by the foreach loops
//simle array
$arr1 =["shrey", 1, 4.0];
foreach($arr1 as $arr){
    //print_r($arr);
}

// multidentionall array

$arr2 = [[1,2],[3,4],[5,6]];
foreach($arr2 as $val){
    foreach($val as $num){
        //echo $num;
    }
}

//associative array
$arr3 = [
    "name" => "Shrey",
    "age" => 12,
    "surname" => "fladu"
];
foreach($arr3 as $key => $value){
   //echo "key => " . $key . " value " . $value . "\n";
}

//multidemntionall associative array

$arr4 = [
    "shrey" => [
        "maths" => 100,
        "science" => 200,
        "english" => 90 
    ],
    "joy" => [
        "maths" => 100,
        "science" => 200,
        "english" => 90 
    ],
    "daksh" => [
        "maths" => 100,
        "science" => 200,
        "english" => 90 
    ]
    ];
foreach($arr4 as $name => $score){
    echo " name - ".$name;
    foreach($score as $sub => $marks){
        echo " subject: ".$sub." marks => ".$marks;
    }
}