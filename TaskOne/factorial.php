<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST["num"];
    $mul = 1;
    for($i = 1; $i<= $n; $i++){
        $mul*=$i;
    }
    echo "Your Factorial Number is: $mul";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="conatiner">
        <form action="/TaskOne/factorial.php" method="POST">
            <label for="num">Enter number:</label>
            <input type="text" id="num" name="num">
            <button type="submit">Submit</button> 
    </div>
</body>
</html>