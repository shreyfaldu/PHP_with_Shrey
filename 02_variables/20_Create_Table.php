<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection was Failed".mysqli_connect_error());
}else{
    echo "Connection made Successfully";
}

$sql = 'CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))';
if(mysqli_query($conn, $sql)){
    echo "Table is created Successfully";
}else{
    echo "The Problem in creation of Table";
}



// $sql = 'CREATE database DB1';
// if(mysqli_query($conn, $sql)){
//     echo "Databse create Successfully";
// }else{
//     echo "Database creation was Failed".mysqli_error($conn);
// }

//Create Table inside the database


?>