<?php
include("../../php/connect.php");
header('Content-Type: application/json; charset=utf-8'); 

$data = json_decode(file_get_contents("php://input"), true);

$username = $data['username'];
$password = $data['password'];

$stmt = $mysqli->prepare("SELECT * FROM `account` WHERE `account` = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $array = $result->fetch_assoc();
    if (password_verify($password, $array['password'])) {
        $data = array('success' => true, 'message' => '登入成功');
    } else {
        $data = array('success' => false, 'message' => '帳號或密碼有誤');
    }
} else {
    $data = array('success' => false, 'message' => '帳號不存在');
}

echo json_encode($data); 

$stmt->close();
$mysqli->close();
?>
