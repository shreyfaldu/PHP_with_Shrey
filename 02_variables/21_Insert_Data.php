<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection was faild".mysqli_connect_error());
}else{
    echo "Connection was Successfully made";
}

//also you can add value through the variable
$name = "shrey";
$destination = "Ahmedabad";

$sql = "INSERT INTO `trip` ( `name`, `dest`) VALUES ( 'ramesh', 'suresh')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Reord add in table was Sunccessfully";
}else{
    echo "Their was problem to add value inside the Table";
}

?>
