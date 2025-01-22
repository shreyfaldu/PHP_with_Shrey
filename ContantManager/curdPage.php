<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$database = "contant";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection Error" . mysqli_connect_error());
}

if (isset($_GET['delete'])) {
    $sno = intval($_GET['delete']); 

    $selectSql = "SELECT image_paths FROM contant WHERE sno = '$sno'";
    $selectResult = mysqli_query($conn, $selectSql);

    if ($selectResult) {
        if ($row = mysqli_fetch_assoc($selectResult)) {
            $imagePath = $row['image_paths'];
            $margeTex = "/" . "ContantManager/";
            $newPath = str_replace($margeTex, '', $imagePath);

            $deleteSql = "DELETE FROM contant WHERE sno = '$sno'";
            $deleteResult = mysqli_query($conn, $deleteSql);

            if ($deleteResult) {
                if (file_exists($newPath)) {
                    unlink($newPath);
                }
                echo "Successfully deleted<br>";
            } else {
                echo "Deletion ERROR: " . mysqli_error($conn) . "<br>";
            }
        } else {
            echo "Record not found<br>";
        }
    } else {
        echo "Error retrieving record: " . mysqli_error($conn) . "<br>";
    }
}


$sql = "SELECT * FROM `contant`";
$result = mysqli_query($conn, $sql);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>CRUD operation page</title>
</head>
<body>
<div class="container my-4">
    <h2>Contants List</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sno.</th>
                <th scope="col">Title</th>
                <th scope="col">Identifier</th>
                <th scope="col">Images</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $imagePaths = explode(',', $row['image_paths']);
            // var_dump($imagePaths);
            $images = '';
            foreach ($imagePaths as $imagePath) {
                $images .= "<img src='$imagePath' style='width:200px; height:auto;' alt='Image'> ";
            }

            echo "<tr>
                <th scope='row'>" . $row['sno'] . "</th>
                <td>" . $row['title'] . "</td>
                <td>" . $row['identifier'] . "</td>
                <td>$images</td>
                <td>" . $row['contant'] . "</td>
                <td>
                    <a href='main.php' class='btn btn-secondary btn-sm'>Add note</a>
                    <a href='edit.php?sno=" . $row['sno'] . "' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='?delete=" . $row['sno'] . "' class='btn btn-danger btn-sm'>Delete</a>
                    <a href='view.php?sno=" . $row['sno'] . "' class='btn btn-info btn-sm'>View</a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
