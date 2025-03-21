<?php
session_start();
if(!isset($_SESSION['password'])){
    echo "Please Login";
}else{
    echo "The name of the Session: " . $_SESSION['username'] . "<br>";
    echo "The password of the Session: " . $_SESSION['password'] . "<br>";
}