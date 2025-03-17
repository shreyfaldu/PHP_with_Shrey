<?php
$isset = false;
$notset = true;
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "reg";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        echo "Error" . mysqli_connect_error();
    }else{
        $email = $_POST['email'];
        $sql = "SELECT * FROM reg WHERE email='$email'";
        $_SESSION['email'] = $email;
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $user = mysqli_fetch_assoc($result);
            echo "Login successful! Welcome, " . $user['name'] . ".";
            $isset = true;
            echo '<br><a href="loggout.php">Logout</a>';
        }else{
            //echo "Envalid email Please check your email || PLEASE REGISTER FIRST";
            $notset = false;
        }
    }
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
    
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php require 'navBar.php';
  require 'home.php';
  ?>
  <?php
  if($isset){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> WELCOME DEAR, $user, You can now Login!!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
         </button>
        </div>";
}
  ?>
  <?php
    if(!$notset){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>ERROR!</strong> Envalid email Please check your email || PLEASE REGISTER FIRST!!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
             </button>
            </div>";
    }
  ?>

  <div class="container my-6">
    <form action="/TaskThree/login.php" method="POST">
  <div class="form-group">
    <label for="name">Username:</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="">Email Add:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>