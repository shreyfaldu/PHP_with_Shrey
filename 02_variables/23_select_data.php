<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
    die("Their was a problem to connect the database".mysqli_connect_error());
}else{
    echo "You are successfully Connect<br>"; 
}

$sql = "SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

//find the number of the total row
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

for($i = 0; $i < $num; $i++ ){
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
}

//Display the row which are the return by the sql Query
// if($num > 0){

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>"; 
// }
?>