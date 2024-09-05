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
        
        // 在此關閉前一個預處理語句
        $stmt->close();
        
        // 插入登入時間
        $account_id = $array['id'];
        $logindate = date('Y-m-d H:i:s');

        $stmt = $mysqli->prepare("INSERT INTO `logintimes` (`account_id`, `logindate`) VALUES (?, ?)");
        $stmt->bind_param("ss", $account_id, $logindate);
        $stmt->execute();
        $stmt->close();  // 正確關閉插入操作的預處理語句
    } else {
        $data = array('success' => false, 'message' => '帳號或密碼有誤');
    }
} else {
    $data = array('success' => false, 'message' => '帳號不存在');
}

// 輸出 JSON 結果
echo json_encode($data);

// 關閉資料庫連線
$mysqli->close();
?>
