<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch record to update
if (isset($_GET['sno'])) {
    $sno = $_GET['sno'];
    $sql = "SELECT * FROM `notes` WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

// Handle record update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //the use of the $sno for the rerendering 
    $sno = $_POST['snoEdit'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `sno` = $sno";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($conn) . "</div>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Update Note</title>
</head>
<body>

<div class="container my-4">
    <h2>Update Note</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="snoEdit" value="<?php echo $row['sno']; ?>">
        <div class="form-group">
            <label for="title">Note Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Note Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $row['description']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Note</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
mysqli_close($conn);
?>
