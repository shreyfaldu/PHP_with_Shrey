<?php
header('Content-Type: application/json');
// header('Access-Control_Allow_Origin: *');

$servername = "localhost";
$username = "root";
$password = "";
$database = "DB1";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo json_encode(array('message' => 'Database connection failed: ' . mysqli_connect_error(), 'status' => false));
    exit();
}

// SQL query
$sql = 'SELECT * FROM trip';

// Execute the query
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo json_encode(array('message' => 'SQL query failed: ' . mysqli_error($conn), 'status' => false));
    exit();
}

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Fetch all rows as an associative array
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No records found', 'status' => false));
}

// Close the connection
mysqli_close($conn);
?>
