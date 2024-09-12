<?php
header('Content-Type: application/json');

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fujenglobal';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT department FROM study_packages";
$result = $conn->query($sql);

$departments = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $departments[] = $row['department'];
    }
    $result->free();
}

echo json_encode($departments);

$conn->close();
?>
