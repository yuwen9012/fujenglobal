<?php
$uploadDir = '../uploads/'; // 圖片實際存放的目錄
$response = ['uploaded' => false];

// 設置允許的 MIME 類型
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

// 設置最大文件大小 (以字節為單位，例如5MB)
$maxFileSize = 5 * 1024 * 1024;

if (isset($_FILES['upload']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK) {
    $fileType = $_FILES['upload']['type'];
    $fileSize = $_FILES['upload']['size'];

    // 檢查 MIME 類型
    if (!in_array($fileType, $allowedTypes)) {
        $response['error'] = 'Invalid file type.';
    } elseif ($fileSize > $maxFileSize) {
        $response['error'] = 'File is too large.';
    } else {
        // 為文件生成唯一名稱
        $fileExt = pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION);
        $uniqueFileName = uniqid('img_', true) . '.' . $fileExt;
        $uploadFile = $uploadDir . $uniqueFileName;
        
        // 創建目錄（如果不存在）
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // 移動上傳的文件到指定目錄
        if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadFile)) {
            $response['uploaded'] = true;
            $response['url'] = 'uploads/' . $uniqueFileName; // 返回相對路徑 URL
        } else {
            $response['error'] = 'Failed to move uploaded file.';
        }
    }
} else {
    $response['error'] = 'No file uploaded or upload error.';
}

// 返回 JSON 格式的響應
header('Content-Type: application/json');
echo json_encode($response);
?>
