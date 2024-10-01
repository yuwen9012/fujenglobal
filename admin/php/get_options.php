<?php

    include('connect.php');

    $dataSheet = $_POST['dataSheet'];

    if ($dataSheet == 'faq_type') {
        $query = "SELECT DISTINCT `id`, `type` 
                    FROM `$dataSheet` 
                   WHERE `status` = '使用中' 
                   ORDER BY `num_order` ASC";
    }

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

?>