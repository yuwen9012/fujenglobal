<?php

    include('connect.php');

    if (empty($_POST['name'])) {
        die('名稱是必填的。');
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $hidden = $_POST['hidden'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = basename($_FILES['image']['name']);
        $uploadDir = '../../images/';
        $targetFilePath = $uploadDir . $image;

        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

        $update = "UPDATE `home_carousel` SET `name` = '$name', 
                                              `image` = '$image', 
                                              `hidden` = '$hidden', 
                                              `update_user` = '郭政億', 
                                              `update_time` = NOW() 
                                        WHERE `id` = ?";
    }
    else {
        $update = "UPDATE `home_carousel` SET `name` = '$name', 
                                              `hidden` = '$hidden', 
                                              `update_user` = '郭政億', 
                                              `update_time` = NOW() 
                                        WHERE `id` = ?";
    }

    $stmt = $mysqli->prepare($update);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo $stmt->error;
    }

    $stmt->close();
    $mysqli->close();

?>