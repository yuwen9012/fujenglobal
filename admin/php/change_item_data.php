<?php

    include('connect.php');

    if (empty($_POST['item'])) {
        die('項目是必填的。');
    }

    $dataSheet = $_POST['dataSheet'];
    $item = $_POST['item'];
    $hidden = $_POST['hidden'];
    $type = $_POST['type'];

    if ($type == 'add') {
        $query = "SELECT MAX(`num_order`) + 1 `next_order` FROM `$dataSheet`";
        $order = $mysqli->query($query);
        $next_order = $order->fetch_assoc()['next_order'];
    
        $insert = "INSERT INTO `$dataSheet` (`item`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) 
                        VALUES ('$item', '$hidden', $next_order, '使用中', '郭政億', NOW())";
        $result = $mysqli->query($insert);
    }
    else if ($type == 'edit') {
        $id = $_POST['id'];

        $update = "UPDATE `$dataSheet` SET `item` = '$item', 
                                           `hidden` = '$hidden', 
                                           `update_user` = '郭政億', 
                                           `update_time` = NOW() 
                                     WHERE `id` = ?";
        $stmt = $mysqli->prepare($update);
        $stmt->bind_param('i', $id);
        $result = $stmt->execute();
        $stmt->close();
    }

    $mysqli->close();

    if ($result) {
        echo 'success';
    }
    else {
        echo 'fail';
    }

?>