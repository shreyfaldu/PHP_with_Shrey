<?php
// Multidimensional array of students and their grades
$students = [
    "John" => [
        "Math" => 85,
        "Science" => 90,
        "English" => 78
    ],
    "Jane" => [
        "Math" => 92,
        "Science" => 88,
        "English" => 95
    ],
    "Bob" => [
        "Math" => 76,
        "Science" => 81,
        "English" => 80
    ]
];

// Iterat
//ing through each student and their grades
foreach ($students as $student => $grades) {
    //echo $student . "'s Grades: \n";
    foreach ($grades as $subject => $grade) {
        //echo $subject . ": " . $grade . "\n";
    }
    //echo "\n";
}

$multiArr = [[1, 2], [3, 4], [5, 6]];

foreach ($multiArr as $innerArray) {
    //echo $innerArray;
    foreach ($innerArray as $element) {
       echo $element . "\n";  // It will print: 1 2 3 4 5 6
    }
}


