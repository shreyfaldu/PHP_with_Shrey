<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/TaskOne/evenOdd.php" method="POST">
            <label for="num">Enter number:</label>
            <input type="text" id="num" name="num">
            <button type="submit">Submit</button>
        </form>
    </div>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num = $_POST['num'];
    if($num % 2 == 0){
        echo "Your number is Even";
    }else{
        echo "Your number is Odd";
    }
}
?>
</body>
</html>