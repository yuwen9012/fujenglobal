<?php

    include('connect.php');

    $dataSheet = $_GET['table'];
    $data = array();

    if (in_array($dataSheet, array('home_introduction_image'))) {
        $query = "SELECT * FROM `$dataSheet`";
    }
    else if ($dataSheet == 'faq_qa') {
        $query = "SELECT t1.*, t2.`type`
                    FROM (SELECT * 
                            FROM `$dataSheet` 
                           WHERE `status` = '使用中') t1 
                    LEFT JOIN `faq_type` t2 
                      ON t1.`tid` = t2.`id`";
    }
    else if ($dataSheet == 'study_package_subtitle') {
        $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' ORDER BY `id` ASC";
    }
    else {
        $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' ORDER BY `num_order` ASC";
    }

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
?>