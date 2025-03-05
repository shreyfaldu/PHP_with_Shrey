<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="conatiner">
        <form action="/TaskOne/butterFlu.php" method="POST">
            <label for="num">Enter the Number:</label>
            <input type="text" id = "num" name = "num">
            <button type="submit">Submit</button>
    </div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $n = $_POST["num"];
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*&nbsp";
    }
    for($k = 1; $k <= $n - $i; $k++){
        echo "_&nbsp";
    }
    for($l = 1; $l <= $n - $i; $l++){
        echo "_&nbsp";
    }
    for($m = 1; $m <= $i; $m++){
        echo "*&nbsp";
    }
    echo "<br>";
}
for($o = 1; $o <= $n; $o++){
    for($p = 1; $p <= $n - $o ; $p++){
        echo "*&nbsp";
    }
    for($q = 1; $q <= $o ; $q++){
        echo "_&nbsp";
    }
    for($s = 1; $s <= $o ; $s++){
        echo "_&nbsp";
    }
    for($t = 1; $t <= $n - $o ; $t++){
        echo "*&nbsp";
    }
    echo "<br>";
}
}
?>