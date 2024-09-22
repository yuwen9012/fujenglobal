<?php

    include('connect.php');

    $dataSheet = $_POST['dataSheet'];

    $query = "SELECT * FROM `$dataSheet` WHERE `update_time` = (SELECT MAX(`update_time`) FROM `$dataSheet`)";
    $result = $mysqli->query($query);
    $data = $result->fetch_assoc();

    $mysqli->close();

    echo json_encode($data);

?>