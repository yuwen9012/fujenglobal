<?php

    include('connect.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $newOrder = $_POST['newOrder'];

        // 確保有收到參數
        if (isset($id) && isset($newOrder)) {
            // 獲取原來的 num_order
            $query = "SELECT `num_order` FROM `home_carousel` WHERE id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $currentRow = $result->fetch_assoc();

            // 檢查是否找到資料
            if ($currentRow) {
                // 更新原來 num_order 的行
                $currentOrder = $currentRow['num_order'];
                if ($currentOrder != $newOrder) {
                    // 調整其他行的 num_order
                    if ($currentOrder < $newOrder) {
                        $updateQuery = "UPDATE `home_carousel` SET `num_order` = `num_order` - 1, `update_time` = NOW() WHERE `num_order` > ? AND `num_order` <= ?";
                        $stmt = $mysqli->prepare($updateQuery);
                        $stmt->bind_param('ii', $currentOrder, $newOrder);
                        $stmt->execute();
                    }
                    else {
                        $updateQuery = "UPDATE `home_carousel` SET `num_order` = `num_order` + 1, `update_time` = NOW() WHERE `num_order` >= ? AND `num_order` < ?";
                        $stmt = $mysqli->prepare($updateQuery);
                        $stmt->bind_param('ii', $newOrder, $currentOrder);
                        $stmt->execute();
                    }

                    // 更新當前行的 num_order
                    $query = "UPDATE `home_carousel` SET `num_order` = ?, `update_time` = NOW() WHERE `id` = ?";
                    $stmt = $mysqli->prepare($query);
                    $stmt->bind_param('ii', $newOrder, $id);
                    $stmt->execute();

                    echo json_encode(['success' => true]);
                }
                else {
                    echo json_encode(['success' => false, 'message' => '未做任何變更']);
                }
            }
            else {
                echo json_encode(['success' => false, 'message' => '未找到資料']);
            }
        }
        else {
            echo json_encode(['success' => false, 'message' => '缺少必要參數']);
        }
    }
    else {
        echo json_encode(['success' => false, 'message' => '無效的請求']);
    }

?>