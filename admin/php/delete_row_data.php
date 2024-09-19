<?php

    include('connect.php');

    $id = $_POST['id'];
    $dataSheet = $_POST['dataSheet'];

    $delete = "DELETE FROM `$dataSheet` WHERE `id` = ?";
    $stmt = $mysqli->prepare($delete);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    
    $query = "SELECT * FROM `$dataSheet` ORDER BY `num_order` ASC";
    $result = $mysqli->query($query);

    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['id'];
        $update = "UPDATE `$dataSheet` SET `num_order` = $i WHERE `id` = ?";
        $stmt = $mysqli->prepare($update);
        $stmt->bind_param('i', $uid);
        $stmt->execute();

        $i++;
    }

    $stmt->close();
    $mysqli->close();

    echo 'success';

?>