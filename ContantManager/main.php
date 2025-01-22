<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contant";

// Establish connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection ERROR: " . mysqli_connect_error());
}

// Fetch and sanitize form data from POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $identifier = $_POST['identifier'];
    $contant = $_POST['contant'];
    $imagePaths = [];

    if (isset($_FILES['image']) && $_FILES['image']['error'][0] == 0) {
        // Loop through each uploaded file
        foreach ($_FILES['image']['name'] as $key => $name) {
            $fileTmpPath = $_FILES['image']['tmp_name'][$key];
            $fileName = $_FILES['image']['name'][$key];
            $fileSize = $_FILES['image']['size'][$key];
            $fileType = $_FILES['image']['type'][$key];

            if ($_FILES['image']['error'][$key] != 0) {
                echo "Error uploading file $fileName: " . $_FILES['image']['error'][$key] . "<br>";
                continue; 
            }

            if ($fileSize > 5000000) {
                echo "The file $fileName is too large. Maximum allowed size is 5MB.<br>";
                continue;
            }

            if (!in_array($fileType, ['image/jpeg', 'image/png', 'image/gif'])) {
                echo "The file $fileName is not a valid image type.<br>";
                continue;
            }

            $uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/ContantManager/';
            $uploadFilePath = $uploadDir . uniqid() . '_' . $fileName;

            if (move_uploaded_file($fileTmpPath, $uploadFilePath)) {
            // Extract the relative path for storage
            $relativeFilePath = str_replace('/Applications/XAMPP/xamppfiles/htdocs', '', $uploadFilePath);
    
            // Add the relative path to the array
            $imagePaths[] = $relativeFilePath;
            // print_r($imagePaths) . "<br>";
            } else {
                echo "Error uploading file: $fileName<br>";
}

        }
    } else {
        echo "No image files uploaded or there was an error.<br>";
    }

    // If there are valid images, save them to the database
    if (!empty($imagePaths)) {
        // Convert the array of image paths into a comma-separated string
        $imagePathsStr = implode(',', $imagePaths);
        
        // Directly inserting into the database (without prepared statements)
        $sql = "INSERT INTO `contant` (`title`, `identifier`, `image_paths`, `contant`) 
                VALUES ('$title', '$identifier', '$imagePathsStr', '$contant')";

        $result = mysqli_query($conn, $sql);
      
        if ($result) {
            header('Location: /ContantManager/curdPage.php');
            exit();
        } else {
            echo "Database insertion ERROR: " . mysqli_error($conn) . "<br>";
        }
    } else {
        echo "No valid images uploaded.<br>";
    }
}

?>

<!doctype html>
<html lang="en" style="
    margin-top: 40px;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Content Manager</title>
  </head>
  <body>

    <div class="container my-18">
    <form action="/ContantManager/main.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="identifier">Identifier</label>
            <input type="text" class="form-control" id="identifier" name="identifier" required>
        </div>
        <div class="form-group">
            <label for="imageUpload">Choose images:</label>
            <input type="file" id="image" name="image[]" accept="image/*" multiple required>
        </div>
        <div class="form-group">
            <label for="contant">Content</label>
            <textarea class="form-control" id="contant" name="contant" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

  </body>
</html>
