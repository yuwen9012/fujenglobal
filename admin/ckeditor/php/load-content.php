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
if (isset($_GET['department']) && isset($_GET['title'])) {
    $department = $conn->real_escape_string($_GET['department']);
    $title = $conn->real_escape_string($_GET['title']);
    
    // 查詢對應最新的 content
    $sql = "SELECT content 
            FROM study_packages 
            WHERE department = '$department' AND title = '$title'
            ORDER BY created_at DESC
            LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 輸出內容
        $row = $result->fetch_assoc();
        echo $row['content'];
    } else {
        echo "沒有內容";
    }
} else {
    echo "未指定 department 或 title";
}

$conn->close();
?>
