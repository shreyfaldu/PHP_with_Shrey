<?php

//cookie value
$cookie_name = "category";
$cookie_value = "Iphone";
setcookie($cookie_name, $cookie_value, time() + 86400, "/");
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie is not set";
}else{
    echo "The name of the Cookie is: " . $cookie_name . "<br>";
    echo "The value of the Cookie is: " . $cookie_value . "<br>";
}