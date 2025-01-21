<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle record deletion
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];//the sno value is get by the URL and take the query to delete
    $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
    if (mysqli_query($conn, $sql)) {
        echo "Record delete successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Handle record insertion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    if (mysqli_query($conn, $sql)) {
        echo "Note added successfully!";
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
}

// Fetch all records
$sql = "SELECT * FROM `notes`";
$result = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>iNotes - Notes Taking</title>
</head>
<body>

<div class="container my-4">
    <h2>Add a New Note</h2>
    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="title">Note Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Note Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
</div>

<div class="container my-4">
    <h2>Notes List</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <th scope='row'>" . $row['sno'] . "</th>
                <td>" . $row['title'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>
                    <a href='update.php?sno=" . $row['sno'] . "' class='btn btn-primary btn-sm'>Update</a>
                    <a href='?delete=" . $row['sno'] . "' class='btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>
