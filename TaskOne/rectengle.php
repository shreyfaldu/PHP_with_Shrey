<?php

$n = 5;
if($n % 2 == 0){
    echo "Give the odd number PLEASE!<br>";
}else{
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            if($i + $j == 4){
                echo "*&nbsp";
            }else{
                echo "_&nbsp";
            }
        }
        echo "<br>";
    }
}

?>