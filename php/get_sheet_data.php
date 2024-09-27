<?php

    include('connect.php');

    $dataSheet = $_POST['dataSheet'];

    $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' AND `hidden` = 'N' ORDER BY `num_order` ASC";
    $result = $mysqli->query($query);
    
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $mysqli->close();

    echo json_encode($data);

?>