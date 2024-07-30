<?php
    include('connect.php');

    if ($_POST['para'] == 'init') {
        $sql = "SELECT * FROM `faq`";
    }
    else if ($_POST['para'] == 'search') {
        $keyword = $_POST['keyword'];
        $sql = "SELECT * FROM `faq` WHERE `type` LIKE '%$keyword%' OR `question` LIKE '%$keyword%' OR `reply` LIKE '%$keyword%'";
    }

    $result = $mysqli -> query($sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data); 
?>