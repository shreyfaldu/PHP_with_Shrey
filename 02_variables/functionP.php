<?php

//fectorial 
function fac($num){
    if($num == 0 || $num == 1){
        return 0;
    }else{
        return $num * fac($num-1)
    }
}
echo fac(10);