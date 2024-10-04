<?php

    include('connect.php');

    // 嘗試從 POST 請求獲取 dataSheet 參數
    $dataSheet = isset($_POST['dataSheet']) ? $_POST['dataSheet'] : '';

    // 如果 POST 沒有接收到參數，則使用 GET 參數
    if (empty($dataSheet)) {
        $dataSheet = isset($_GET['dataSheet']) ? $_GET['dataSheet'] : '';
    }

    if ($dataSheet == 'faq_type') {
        $query = "SELECT DISTINCT `id`, `type` 
                    FROM `$dataSheet` 
                   WHERE `status` = '使用中' 
                   ORDER BY `num_order` ASC";
    }
    else if ($dataSheet == 'study_package_subtitle') {
        $query = "SELECT DISTINCT `id`, `name` 
                    FROM `$dataSheet` 
                   WHERE `status` = '使用中'";
    }

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

?>