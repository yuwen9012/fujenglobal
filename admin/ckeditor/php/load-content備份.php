<?php
$servername = "localhost";
$username = "root"; // 替換為您的資料庫用戶名
$password = ""; // 替換為您的資料庫密碼
$dbname = "ckeditor_demo"; // 替換為您的資料庫名稱

// 創建連接
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 確保收到 'section' 參數
if (isset($_GET['section'])) {
    $section = $conn->real_escape_string($_GET['section']);
    
    // 根據 'section' 參數決定內容的 ID
    $id = ($section === 'introduction') ? 1 : 2; // 假設 introduction 是 1, features 是 2
    
    // 查詢內容
    $sql = "SELECT content FROM content WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 輸出內容
        $row = $result->fetch_assoc();
        echo $row['content'];
    } else {
        echo "沒有內容";
    }
} else {
    echo "未指定 section";
}

$conn->close();
?>
