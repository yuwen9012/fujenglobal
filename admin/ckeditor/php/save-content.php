<?php
$servername = "localhost";
$username = "root"; // 替換為您的資料庫用戶名
$password = ""; // 替換為您的資料庫密碼
$dbname = "fujenglobal"; // 替換為您的資料庫名稱

// 創建連接
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 確保收到 'department' 和 'title' 參數
if (isset($_POST['department']) && isset($_POST['title']) && isset($_POST['content'])) {
    $department = $conn->real_escape_string($_POST['department']);
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);
    
    // 禁用figure標籤
    $content = preg_replace('/<figure[^>]*>/i', '', $content);
    $content = preg_replace('/<\/figure>/i', '', $content);

    // 插入新內容
    $sql = "INSERT INTO study_packages (department, title, content) 
            VALUES ('$department', '$title', '$content')";
    
    if ($conn->query($sql) === TRUE) {
        echo "內容儲存成功";
    } else {
        echo "錯誤: " . $conn->error;
    }
} else {
    echo "未收到所有必要的參數";
}

$conn->close();
?>
