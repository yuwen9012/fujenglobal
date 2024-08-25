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

// 確保收到 'section' 和 'content' 參數
if (isset($_POST['section']) && isset($_POST['content'])) {
    $section = $conn->real_escape_string($_POST['section']);
    $content = $conn->real_escape_string($_POST['content']);
    
    // 根據 'section' 參數決定內容的 ID
    $id = ($section === 'introduction') ? 1 : 2; // 假設 introduction 是 1, features 是 2
    
    // 插入或更新內容
    $sql = "INSERT INTO content (id, content, image_path) VALUES ($id, '$content', 'path/to/image.jpg') 
            ON DUPLICATE KEY UPDATE content='$content'";
    
    if ($conn->query($sql) === TRUE) {
        echo "內容儲存成功";
    } else {
        echo "錯誤: " . $conn->error;
    }
} else {
    echo "未收到內容";
}

$conn->close();
?>
