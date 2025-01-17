<?php
//create the data base
$servername ="localhost";
$usernmae = "root";
$password = "";
$database = "Fledge";

$conn = mysqli_connect($servername, $usernmae, $password, $database);

if($conn){
    echo "conection mate successfully<br>";
}else{
    die("The connection was failed".mysqli_connect_error());
}

//All curd Opration in one code


//Update the record
// $sql = "UPDATE `Fledgee` SET `dest` = 'goa' WHERE `Fledgee`.`sno` = 3";
// if(mysqli_query($conn, $sql)){
//     echo "The record was successfully uupadte<br>";
// }else{
//     echo "Error";
// }

//Delete the value from the table
// $sql = "DELETE FROM Fledgee WHERE sno = 1";
// if(mysqli_query($conn, $sql)){
//     echo "The record is successfully deleted<br>";
// }else{
//     echo "Error";
// }


//Insert the value inside the table
// $sql = "INSERT INTO `Fledgee` ( `name`, `dest`) VALUES ( 'shrey', 'raj')";
// if(mysqli_query($conn, $sql)){
//     echo "The value is inserted successfully<br>";
// }else{
//     echo "Error";
// }

//creation of the tbale
// $sql = 'CREATE TABLE `Fledgee` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))';
// if(mysqli_query($conn, $sql)){
//     echo "Your table create successfully<br>";
// }else{
//     echo "You made a mistake to create the table<br>";
// }
// $sql = "CREATE DATABASE Fledgee";
// if(mysqli_query($conn, $sql)){
//     echo "The table made successfullt<br>";
// }else{
//     echo "The table was not create";
// }

//create the table inside this database

?>