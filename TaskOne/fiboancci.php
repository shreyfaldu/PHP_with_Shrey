<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/TaskOne/fiboancci.php" method="POST">
            <label for="num">Enter the Number: </label>
            <input type="text" id="num" name="num">
            <button type="submit">Submit</button>
        </form>
    </div>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST["num"];
        if($n <= 0){
            echo "Not found<br>";
        }elseif($n == 1){
            echo "Fibonacci series is: 0";
        }else{
        $fib = [0,1];
        for($i = 2; $i < $n; $i++){
            $fib[] = $fib[$i-2] + $fib[$i - 1];
        }
    }
        echo "Fibonacci series is: " . implode(",",$fib);
    }
?>
</body>
</html>
