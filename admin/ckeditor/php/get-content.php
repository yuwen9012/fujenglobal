<?php
header('Content-Type: application/json');
$department = $_GET['department'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'fujenglobal';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, content FROM study_packages WHERE department = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $department);
$stmt->execute();
$result = $stmt->get_result();

$content = [];
while ($row = $result->fetch_assoc()) {
    $content[] = $row;
}

echo json_encode($content);

$stmt->close();
$conn->close();
?>
