<?php
// 假設資料庫連線參數
include("../../php/connect.php");
header("Content-type: text/html; charset=utf-8");

// 確保資料庫連線成功
if (!$mysqli) {
    die("資料庫連接失敗：" . mysqli_connect_error());
}

$slcab = mysqli_select_db($mysqli, "fujenglobal");

// 從前端取得的舊密碼和新密碼
$oldPassword = $_POST["oldPassword"];
$newPassword = $_POST["newPassword"];

// 檢查 session 是否存在並取得帳號
session_start();
if (isset($_SESSION['account'])) {
    $account = $_SESSION['account'];
    

    // 使用參數化查詢，以避免 SQL 注入
    $checkQuery = "SELECT * FROM account WHERE account=?";
    if ($stmt = $mysqli->prepare($checkQuery)) {
        $stmt->bind_param("s", $account);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            if (password_verify($oldPassword, $storedPassword)) {
                // 舊密碼正確，檢查新舊密碼是否相同
                if ($oldPassword === $newPassword) {
                    echo "新舊密碼不可相同";
                } elseif (strlen($newPassword) < 4 || strlen($newPassword) > 12) {
                    echo "新密碼未輸入";
                } else {
                    // 舊密碼正確，執行 UPDATE 查詢
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updateQuery = "UPDATE account SET `password`=? WHERE account=?";
                    
                    if ($stmt = $mysqli->prepare($updateQuery)) {
                        $stmt->bind_param("ss", $hashedPassword, $account);
                        if ($stmt->execute()) {
                            echo "密碼修改成功!請重新登入";
                            exit();
                        } else {
                            echo "錯誤: " . $stmt->error;
                        }
                        $stmt->close();
                    } else {
                        echo "錯誤: " . $mysqli->error;
                    }
                }
            } else {
                // 舊密碼錯誤
                echo "舊密碼錯誤";
            }
        } else {
            // 找不到帳號
            echo "找不到帳號";
        }
    } else {
        echo "錯誤: " . $mysqli->error;
    }
} else {
    echo "Session 不存在";
}
?>