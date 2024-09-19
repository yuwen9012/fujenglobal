<?php

    include('connect.php');

    $dataSheet = $_GET['table'];
    $data = array();

    $query = "SELECT * FROM $dataSheet ORDER BY `num_order` ASC";

    $result = $mysqli->query($query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
?>