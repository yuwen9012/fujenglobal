<?php

    include('connect.php');

    $action = $_POST['action'];
    $dataSheet = $_POST['dataSheet'];
    $is_order = filter_var($_POST['is_order'], FILTER_VALIDATE_BOOLEAN);
    $is_status = filter_var($_POST['is_status'], FILTER_VALIDATE_BOOLEAN);

    if ($action == 'add') {
        if ($is_order) {
            $query = "SELECT MAX(`num_order`) + 1 `next_order` FROM `$dataSheet`";
            $result = $mysqli->query($query);
            $next_order = $result->fetch_assoc()['next_order'];
        }
    
        if ($is_status) {
            $status = '使用中';
        }

        if ($dataSheet == 'faq_type') {
            $type = $_POST['type'];
    
            $insert = "INSERT INTO `$dataSheet` (`type`, `num_order`, `status`, `update_user`, `update_time`) 
                                        VALUES (?, ?, ?, '郭政億', NOW())";
            
            $stmt = $mysqli->prepare($insert);
            $stmt->bind_param('sis', $type, $next_order, $status);
        }
        else if ($dataSheet == 'faq_qa') {
            $tid = $_POST['type'];
            $question = $_POST['question'];
            $reply = $_POST['reply'];

            $insert = "INSERT INTO `$dataSheet` (`tid`, `question`, `reply`, `status`, `update_user`, `update_time`) 
                                        VALUES (?, ?, ?, ?, '郭政億', NOW())";
            
            $stmt = $mysqli->prepare($insert);
            $stmt->bind_param('isss', $tid, $question, $reply, $status);
        }
        else {
            $title = $_POST['title'];
            $writing = $_POST['writing'];
    
            $insert = "INSERT INTO `$dataSheet` (`title`, `content`, `update_user`, `update_time`) 
                                        VALUES (?, ?, '郭政億', NOW())";
            
            $stmt = $mysqli->prepare($insert);
            $stmt->bind_param('ss', $title, $writing);
        }
    }
    else if ($action == 'edit') {
        if ($dataSheet == 'faq_type') {
            $id = $_POST['id'];
            $type = $_POST['type'];

            $update = "UPDATE `$dataSheet` SET `type` = ?, `update_user` = '郭政億', `update_time` = NOW() WHERE `id` = ?";

            $stmt = $mysqli->prepare($update);
            $stmt->bind_param('si', $type, $id);
        }
        else if ($dataSheet == 'faq_qa') {
            $id = $_POST['id'];
            $tid = $_POST['type'];
            $question = $_POST['question'];
            $reply = $_POST['reply'];

            $update = "UPDATE `$dataSheet` SET `tid` = ?, `question` = ?, `reply` = ?, `update_user` = '郭政億', `update_time` = NOW() WHERE `id` = ?";

            $stmt = $mysqli->prepare($update);
            $stmt->bind_param('issi', $tid, $question, $reply, $id);
        }
    }
    else if ($action == 'delete') {
        $id = $_POST['id'];

        $update = "UPDATE `$dataSheet` SET `status` = '刪除' WHERE `id` = ?";
        
        $stmt = $mysqli->prepare($update);
        $stmt->bind_param('i', $id);
    }

    if ($stmt->execute()) {
        echo 'success';
    }
    else {
        echo 'fail';
    }
    $stmt->close();
    $mysqli->close();

?>