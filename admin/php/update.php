<?php

    include('connect.php');

    $dataSheet = $_POST['dataSheet'];
    $title = $_POST['title'];
    $writing = $_POST['writing'];

    $insert = "INSERT INTO `$dataSheet` (`title`, `content`, `update_user`, `update_time`) 
                                 VALUES ('$title', '$writing', '郭政億', NOW())";
    
    $result = $mysqli->query($insert);
    
    if ($result) {
        echo 'success';
    }
    else {
        echo 'fail';
    }
    $mysqli->close();

?>