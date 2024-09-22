<?php

    include('connect.php');

    $dataSheet = $_GET['table'];
    $data = array();

    if ($dataSheet == 'home_carousel') {
        $query = "SELECT * FROM $dataSheet WHERE `status` = '使用中' ORDER BY `num_order` ASC";
    }
    else {
        $query = "SELECT * FROM $dataSheet";
    }

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
?>