<?php
$set = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['name'];
    $email = $_POST['email'];
    $set = true;
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //echo "Welcome: " . $username . "<br>";
    //echo "Your name is: " . $email . "<br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "html";
    $conn = mysqli_connect($servername,$username, $password, $database);
        $sql = "INSERT INTO `html` (`name`, `email`) VALUES ('$user', '$email')";
        if(mysqli_query($conn, $sql)){
            echo "Data Successfully inserted<br>";
        }else{
            echo "Error to insert the data";
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    if($set){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success! Welcome: $user</strong> 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span>
        </button>
      </div>";
      }
    ?>
    <div class="container my-6">
    <form action="/TaskTwo/htmlForm.php" method="POST">
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