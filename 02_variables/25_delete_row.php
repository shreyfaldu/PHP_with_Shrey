<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

$conn = mysqli_connect($servername, $username,$password, $database);
if(!$conn){
    die("Error to coonect the databse".mysqli_connect_error());
}else{
    echo "You are successfully connect";
}

$sql = "DELETE FROM `trip` WHERE `trip`.`sno` = 4";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Successfully delete<br>";
}else{
    echo "Not success of deletion";
}

?>