<?php

    include('connect.php');

    if (empty($_POST['name'])) {
        die("名稱是必填的。");
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $name = $_POST['name'];
        $image = basename($_FILES['image']['name']);
        $hidden = $_POST['hidden'];

        $query = "SELECT MAX(`num_order`) + 1 `next_order` FROM `home_carousel`";
        $result = $mysqli->query($query);
        $next_order = $result->fetch_assoc()['next_order'];

        $insert = "INSERT INTO `home_carousel` (`name`, `image`, `hidden`, `num_order`, `update_user`, `update_time`) 
                        VALUES ('$name', '$image', '$hidden', $next_order, '郭政億', NOW())";
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