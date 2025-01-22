<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "contant";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection ERROR: " . mysqli_connect_error());
}

if (isset($_GET['sno'])) {
    $sno = $_GET['sno'];
    $sql = "SELECT * FROM contant WHERE sno = '$sno'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $imagePath = $row['image_paths'];
    // var_dump($row);
}
    
    // var_dump($imagePath);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sno = $_POST['snoEdit'];
    $title = $_POST['title'];
    $identifier = $_POST['identifier'];
    $contant = $_POST['contant'];

    // Get existing image path


    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        echo $_FILES['image']['name'];
        $targetDir = "/Applications/XAMPP/xamppfiles/htdocs/ContantManager/"; // Ensure this directory exists and is writable
        $targetFile = $targetDir .uniqid() . basename($_FILES["image"]["name"]);
        // var_dump($targetFile);
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)){
            $relativeFilePath = str_replace('/Applications/XAMPP/xamppfiles/htdocs', '', $targetFile);
            $imagePath = $relativeFilePath; // Update the image path
        }

    }

    // Update the record with the new data
    $sql = "UPDATE contant SET title = '$title', identifier = '$identifier', contant = '$contant', image_paths = '$imagePath' WHERE sno = '$sno'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
            
                $imagePath = $row['image_paths'];
                $margeTex = "/" . "ContantManager/";
                $newPath = str_replace($margeTex, '', $imagePath);
                if (file_exists($newPath)) {
                    unlink($newPath);
                }
    
        header('Location: curdPage.php');
    } else {
        echo "Updation Error<br>";
    }
}
?>

<!doctype html>
<html lang="en" style="margin-top: 40px">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit Page</title>
</head>
<body>
    <div class="container">
    <h2>Edit Page:</h2>
    <form action="edit.php?sno=<?php echo $row['sno']; ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="snoEdit" value="<?php echo $row['sno']; ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="identifier">Identifier</label>
            <input type="text" class="form-control" id="identifier" name="identifier" value="<?php echo $row['identifier'] ?>" required>
        </div>
        <div class="form-group">
            <label for="currentImage">Current Image:</label><br>
            <img src="<?php echo $imagePath; ?>" style="width:290px; height:auto;" alt="Image"><br>
            <label for="imageUpload">Choose a new image:</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <div class="form-group">
            <label for="contant">Content</label>
            <textarea class="form-control" id="contant" name="contant" rows="3" required><?php echo $row['contant'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0IejwBvKU7imGFAV0wwj1yfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https:
