<?php

    include('connect.php');

    $id = $_POST['id'];
    $dataSheet = $_POST['dataSheet'];

    $delete = "UPDATE `$dataSheet` SET `status` = '刪除', `num_order` = 0, `update_user` = '郭政億', `update_time` = NOW() WHERE `id` = ?";
    $stmt = $mysqli->prepare($delete);
    $stmt->bind_param('i', $id);
    $status = $stmt->execute();
    
    $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' ORDER BY `num_order` ASC";
    $result = $mysqli->query($query);

    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['id'];
        $update = "UPDATE `$dataSheet` SET `num_order` = $i, `update_user` = '郭政億', `update_time` = NOW() WHERE `id` = ?";
        $stmt = $mysqli->prepare($update);
        $stmt->bind_param('i', $uid);
        $stmt->execute();

        $i++;
    }

    $stmt->close();
    $mysqli->close();

    if ($status) {
        echo 'success';
    }
    else {
        echo 'fail';
    }

?>