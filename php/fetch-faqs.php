<?php
    include('connect.php');

    if ($_POST['para'] == 'init') {
        $sql = "SELECT t1.*, t2.`type` 
                  FROM `faq_qa` t1 LEFT JOIN `faq_type` t2 ON t1.`tid` = t2.`id`";
    }
    else if ($_POST['para'] == 'search') {
        $keyword = $_POST['keyword'];
        $sql = "SELECT t1.*, t2.`type` 
                  FROM `faq_qa` t1 LEFT JOIN `faq_type` t2 ON t1.`tid` = t2.`id`
                 WHERE t2.`type` LIKE '%$keyword%' OR t1.`question` LIKE '%$keyword%' OR t1.`reply` LIKE '%$keyword%'";
    }

    $result = $mysqli -> query($sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $query = "SELECT `type` FROM `faq_type` ORDER BY `num_order` ASC";
    $result = $mysqli -> query($query);
    $types = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $types[] = $row['type'];
    }

    $response = array(
        'data' => $data,
        'types' => $types
    );

    echo json_encode($response);
?>