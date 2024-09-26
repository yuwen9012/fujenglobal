<?php

    include('connect.php');

    $dataSheet = $_POST['dataSheet'];

    $query = "SELECT * FROM `$dataSheet` WHERE `status` = '使用中' AND `hidden` = 'N' ORDER BY `num_order` ASC";
    $result = $mysqli->query($query);

    $scores = array();
    $datas = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (strpos($row['quantity'], '-') !== false) {
                $parts = explode('-', $row['quantity']);
                $number1 = (int)$parts[0];
                $number2 = (int)$parts[1];

                $quantity = array($number1, $number2);
            }
            else {
                $quantity = (int)$row['quantity'];
                
            }
            $scores[$row['name']] = $quantity;
    
            if (isset($row['image']) && isset($row['quantity'])) {
                $datas[] = [
                    'image' => $row['image'],
                    'name' => $row['name'],
                    'quantity' => $quantity,
                ];
            }
        }
    }

    $response = [
        'scores' => $scores,
        'datas' => $datas,
    ];

    echo json_encode($response);
    
    
?>