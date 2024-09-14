<?php
include("../../php/connect.php");

$sql = "SELECT * FROM study_packages_college";
$result = $mysqli ->query($sql);

$college = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $college[] = [
            'id' => $row['college_id'],
            'name' => $row['college_name']
        ];
    }
    $result->free();
}

echo json_encode($college);

$mysqli ->close();
?>
