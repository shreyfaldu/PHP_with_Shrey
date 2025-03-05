<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contanier">
        <form action="/TaskOne/print.php" method="POST">
            <label for="num">Enter the number: </label>
            <input type="text" id = "num" name="num">
            <button type="submit">Submit</button>
    </div>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST["num"];
    for($i = 1;$i <= $n; $i++){
        echo $i . "<br>";
    }
}