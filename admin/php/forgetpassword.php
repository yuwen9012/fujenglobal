<?php
// 引入PHPMailer所需的文件
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// 將PHPMailer的文件包含進來
require dirname(__FILE__) . '/mail/Exception.php';
require dirname(__FILE__) . '/mail/PHPMailer.php';
require dirname(__FILE__) . '/mail/SMTP.php';

// 包含資料庫連接文件
include("../../php/connect.php");
// 設置HTTP頭為HTML格式，並指定編碼為UTF-8
header("Content-type: text/html; charset=utf-8");

// 選擇資料庫
$slcab = mysqli_select_db($mysqli, "fujenglobal");

// 從POST請求中獲取帳號和信箱
$account = $_POST["account"];
$email = $_POST["email"];

// 檢查帳號和信箱是否為空
if (empty($_POST["account"]) || empty($_POST["email"])) {
    echo "請輸入帳號和信箱";
    // 停止執行剩餘部分的程式
    exit;
}

// 查詢該帳號是否存在
$CheckSQL = "SELECT * FROM account WHERE account='$account'";
$result = $mysqli->query($CheckSQL);

// 如果查詢結果中存在該帳號
if ($result->num_rows > 0) {
    // 獲取查詢結果的數組
    $check = mysqli_fetch_array($result);

    // 驗證信箱格式是否正確
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // 比較提供的信箱與數據庫中的信箱是否相同（不區分大小寫）
        if (strtolower($email) === strtolower($check['email'])) {
            // 生成隨機的新密碼
            $newPassword = generateRandomPassword(8);

            // 創建一個新的PHPMailer實例
            $mail = new PHPMailer(true);

            try {
                // 設定郵件伺服器
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';  // 指定SMTP伺服器
                $mail->SMTPAuth   = true;
                $mail->Username = "fujenglobal@gmail.com"; // SMTP帳號
                $mail->Password = "zcqvxuzerhtvrbch"; // SMTP密碼
                $mail->SMTPSecure = 'tls'; // 啟用TLS加密
                $mail->Port       = 587; // 設置連接埠

                // 設置郵件編碼
                $mail->CharSet = 'UTF-8';

                // 設置郵件收件人
                $mail->setFrom("fujenglobal@gmail.com");
                $mail->addAddress($email);

                // 設置郵件內容
                $mail->isHTML(true);
                $mail->Subject = '外國學生入學資訊網-忘記密碼';
                $mail->Body    = "您的新密碼是：$newPassword";

                // 發送郵件
                $mail->send();
                echo "新密碼已成功寄送至您的信箱!";
                // 將新密碼進行哈希加密
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                // 更新資料庫中的密碼
                $UpdateSQL = "UPDATE account SET `password`='$hashedPassword' WHERE `account`='$account'";
                $mysqli->query($UpdateSQL);
                
            } catch (Exception $e) {
                // 捕捉發送郵件失敗的異常並回應用戶
                echo "郵件發送失敗: {$mail->ErrorInfo}";
            }
           
        } else {
            // 如果信箱不匹配，回應用戶信箱錯誤
            echo "信箱錯誤";
        }
    } else {
        // 如果信箱格式不正確，回應用戶信箱格式錯誤
        echo "信箱格式錯誤";
    }
} else {
    // 如果查無此帳號，回應用戶查無此帳號
    echo "查無此帳號";
}

// 生成隨機密碼的函數
function generateRandomPassword($length = 8)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomPassword = '';

    // 循環生成指定長度的隨機密碼
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomPassword;
}
?>
