<?php
session_start();
if(isset($_SESSION['username'])){
echo "Welcom " . $_SESSION['username'] . "<br>";
echo "Your category is " . $_SESSION['category'] . "<br>";
}else{
    echo "Please login ";
}
?>