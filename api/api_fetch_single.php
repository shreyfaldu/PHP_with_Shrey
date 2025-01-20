<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "DB1";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo json_encode(array('message' => 'Error connecting to the database: ' . mysqli_connect_error(), 'status' => false));
    exit();
}
$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['sno'];

$sql = "SELECT * FROM trip WHERE id = {$student_id}";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo json_encode(array('message' => 'Error executing query: ' . mysqli_error($conn), 'status' => false));
    exit();
}

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No records found', 'status' => false));
}

mysqli_close($conn);
?>
