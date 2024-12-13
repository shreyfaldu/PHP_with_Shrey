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

$sql = "SELECT * FROM `trip` WHERE `dest` = 'suresh'";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Successfully<br>";
}else{
    echo "Not success";
}
$num = mysqli_num_rows($result);
echo $num;
$no = 1;
for($i = 0; $i < $num ;$i++){
    $row = mysqli_fetch_assoc($result);
    echo $no . " hello " . $row['name'] . " to " . $row['dest'];
    echo "<br>";
    $no += 1;
}

//update the row value

$sql = "UPDATE `trip` SET `name` = 'ramyo9' WHERE `trip`.`sno` = 4";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Successfully update<br>";
}else{
    echo "Not success update<br>";
}
?>