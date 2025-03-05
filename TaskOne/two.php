<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/TaskOne/two.php" method="GET">
            <label for="num">Enter N:</label>
            <input type="text" id="num" name="num">
    </div>
</body>



<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
$n = $_POST["num"];
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n - $i; $j++){
        echo "_";
    }
    for($k = 1; $k <= $i; $k++){
        echo "*_";
    }
    echo "<br>";
}
}
?>
</html>