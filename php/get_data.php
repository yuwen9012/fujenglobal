<?php

    include('connect.php');

    $dataSheet = $_GET['table'];
    $data = array();

    if (in_array($dataSheet, array('home_carousel', 'study_abroad_carousel'))) {
        $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' AND `hidden` = 'N' ORDER BY `num_order` ASC";
    }
    else if ($dataSheet == 'home_introduction_image') {
        $query = "SELECT * FROM `$dataSheet`";
    }

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
?>