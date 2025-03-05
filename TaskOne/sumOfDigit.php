<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="containor">
    <form action="/TaskOne/sumOfDigit.php" method="POST">
        <label for="num">Enter number:</label>
        <input type="text" id="num" name="num">
        <button type="submit">Submit</button>
    </div>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num = $_POST['num'];
    $sum = 0;
    $numStr = (string)$num;
    for($i = 0; $i < strlen($numStr); $i++){
        $digit = (int)$numStr[$i];
        $sum += $digit;
    }
    echo "The sum of All Digit is: " . $sum;
}
?>
</body>
</html>