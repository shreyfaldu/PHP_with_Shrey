<?php

function processMarks($marks){
    $sum = 0;
    foreach($marks as $value){
        $sum += $value;

    }
    return $sum;
}

function avgMarks($marks){
    $sum = 0;
    foreach($marks as $value){
        $sum += $value;
        $fvlaue = $sum/6;
    }
    return $fvlaue;
}

$rohanDas = [78,43,56,89,90,43];
$totalMarks = avgMarks($rohanDas);
echo "The Total marks of rohanDas out of 600 is: $totalMarks";

?>