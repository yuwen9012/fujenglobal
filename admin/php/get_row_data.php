<?php

    include('connect.php');

    $id = $_POST['id'];
    $dataSheet = $_POST['dataSheet'];

    if ($dataSheet == 'faq_qa') {
        $query = "SELECT t1.*, t2.`type`
                    FROM (SELECT * 
                            FROM `$dataSheet`
                           WHERE `id` = ?) t1 
                    LEFT JOIN `faq_type` t2 
                      ON t1.`tid` = t2.`id`";
    }
    else {
        $query = "SELECT * FROM `$dataSheet` WHERE `id` = ?";
    }
    
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    $stmt->close();
    $mysqli->close();

    echo json_encode($data);

?>