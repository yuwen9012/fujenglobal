<?php
include("../../php/connect.php");

// 確保收到 'college_id'、'title_id' 和 'content' 參數
if (isset($_POST['college_id']) && isset($_POST['title_id']) && isset($_POST['content'])) {
    $college_id = $mysqli->real_escape_string($_POST['college_id']);
    $title_id = $mysqli->real_escape_string($_POST['title_id']);
    $content = $mysqli->real_escape_string($_POST['content']);
    
    // 禁用figure標籤
    $content = preg_replace('/<figure[^>]*>/i', '', $content);
    $content = preg_replace('/<\/figure>/i', '', $content);

    // 插入新內容
    $sql = "INSERT INTO study_packages_content (college_id, title_id, content) 
            VALUES ('$college_id', '$title_id', '$content')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "內容儲存成功";
    } else {
        echo "錯誤: " . $mysqli->error;
    }
} else {
    echo "未收到所有必要的參數";
}

$mysqli->close();
?>
