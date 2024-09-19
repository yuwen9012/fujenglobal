<?php

    include('connect.php');

    $id = $_POST['id'];
    $dataSheet = $_POST['dataSheet'];

    $query = "SELECT * FROM `$dataSheet` WHERE `id` = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    $stmt->close();
    $mysqli->close();

    echo json_encode($data);

?>