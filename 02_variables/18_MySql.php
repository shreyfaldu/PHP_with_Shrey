<?php

//Way to connect the MySQL dataBase
//1. MySQLi extension
//2. PDO -> PHP Data Object

//Connection to the DataBase
$servername = "localhost";
$username = "root";
$password = "";

//Create the Connection
$conn = mysqli_connect($servername, $username, $password);

//Die if the connection was not succesfull
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
echo "Connection was Sunccesfull"

?>