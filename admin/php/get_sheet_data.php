<?php

    include('connect.php');

    $dataSheet = $_GET['table'];
    $data = array();

    if (in_array($dataSheet, array('home_carousel', 'study_abroad_scorer', 'study_abroad_carousel', 'how2apply_timeline', 'how2apply_qualification', 'how2apply_checklist'))) {
        $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' ORDER BY `num_order` ASC";
    }
    else {
        $query = "SELECT * FROM `$dataSheet`";
    }

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
?>