<?php

    include('connect.php');

    if (empty($_POST['name'])) {
        die('名稱是必填的。');
    }

    $dataSheet = $_POST['dataSheet'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $name = $_POST['name'];
        $image = basename($_FILES['image']['name']);
        $hidden = $_POST['hidden'];

        $query = "SELECT MAX(`num_order`) + 1 `next_order` FROM `$dataSheet`";
        $result = $mysqli->query($query);
        $next_order = $result->fetch_assoc()['next_order'];

        if (isset($_POST['link'])) {
            $link = $_POST['link'];
            $target = $_POST['target'];
            $insert = "INSERT INTO `$dataSheet` (`name`, `image`, `link`, `target`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) 
                            VALUES ('$name', '$image', '$link', '$target', '$hidden', $next_order, '使用中', '郭政億', NOW())";
        }
        else if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            $insert = "INSERT INTO `$dataSheet` (`name`, `image`, `quantity`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) 
                            VALUES ('$name', '$image', $quantity, '$hidden', $next_order, '使用中', '郭政億', NOW())";
        }
        else {
            $insert = "INSERT INTO `$dataSheet` (`name`, `image`, `hidden`, `num_order`, `status`, `update_user`, `update_time`) 
                            VALUES ('$name', '$image', '$hidden', $next_order, '使用中', '郭政億', NOW())";
        }
        $mysqli->query($insert);

        $mysqli->close();

        $uploadDir = '../../images/';
        $targetFilePath = $uploadDir . $image;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            echo 'success';
        }
        else {
            echo 'fail';
        }
    }

?>