<?php

    include('connect.php');

    $id = $_POST['id'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = basename($_FILES['image']['name']);
        $uploadDir = '../../images/';
        $targetFilePath = $uploadDir . $image;

        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

        $update = "UPDATE `home_introduction_image` SET `image` = '$image', 
                                                        `update_user` = '郭政億', 
                                                        `update_time` = NOW()
                                                  WHERE `id` = ?";

        $stmt = $mysqli->prepare($update);
        $stmt->bind_param('i', $id);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo $stmt->error;
        }

        $stmt->close();
        $mysqli->close();
    }
    else {
        echo '檔案上傳失敗';
    }

?>