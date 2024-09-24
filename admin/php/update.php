<?php

    include('connect.php');

    $dataSheet = $_POST['dataSheet'];
    $title = $_POST['title'];
    $writing = $_POST['writing'];

    $insert = "INSERT INTO `$dataSheet` (`title`, `content`, `update_user`, `update_time`) 
                                 VALUES (?, ?, '郭政億', NOW())";
    
    $stmt = $mysqli->prepare($insert);
    $stmt->bind_param('ss', $title, $writing);

    if ($stmt->execute()) {
        echo 'success';
    }
    else {
        echo 'fail';
    }
    $stmt->close();
    $mysqli->close();

?>