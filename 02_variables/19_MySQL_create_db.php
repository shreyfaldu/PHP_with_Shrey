<?php

$servername = "localhost";
$username = "root";
$password = "";
//conection to DB
$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection was feild: ".mysqli_connect_error());
}else{
    echo "Connection was Successfully";
}

//create the DB
$sql = "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
    echo "Dtabse is created";
}else{
    echo "Error creating dabase";
}




?>