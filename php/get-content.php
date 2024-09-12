<?php
include('connect.php');

$college_id = $_POST['id'];

// 查詢學院名稱
$sql = "
    SELECT college_name
    FROM study_packages_college
    WHERE college_id = ?
";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $college_id);
$stmt->execute();
$result = $stmt->get_result();
$college_name = $result->fetch_assoc()['college_name'];

if (!$college_name) {
    echo json_encode(['error' => 'College not found']);
    $stmt->close();
    $mysqli->close();
    exit;
}

// 查詢標題 ID
$sql = "
    SELECT title_id
    FROM study_packages_combine
    WHERE college_id = ?
";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $college_id); 
$stmt->execute();
$result = $stmt->get_result();

$title_ids = [];
while ($row = $result->fetch_assoc()) {
    $title_ids[] = $row['title_id'];
}

if (empty($title_ids)) {
    echo json_encode(['college_name' => $college_name, 'contents' => []]);
    $stmt->close();
    $mysqli->close();
    exit;
}

// 使用 IN 句和動態佔位符來處理多個 title_id
$title_ids_placeholder = implode(',', array_fill(0, count($title_ids), '?'));
$sql = "
    SELECT t.title_id, t.title_name, c.content
    FROM study_packages_title AS t
    LEFT JOIN study_packages_content AS c
    ON t.title_id = c.title_id AND c.college_id = ?
    WHERE t.title_id IN ($title_ids_placeholder)
    ORDER BY t.title_id ASC
";

$types = str_repeat('i', count($title_ids)) . 'i';
$params = array_merge($title_ids, [$college_id]);

$stmt = $mysqli->prepare($sql);
$stmt->bind_param($types, ...$params);
$stmt->execute();
$result = $stmt->get_result();

$contents = [];
while ($row = $result->fetch_assoc()) {
    if (!isset($contents[$row['title_id']])) {
        $contents[$row['title_id']] = [
            'title_name' => $row['title_name'],
            'content' => $row['content'] ?? '' 
        ];
    }
}

$response = [
    'college_name' => $college_name,
    'contents' => array_values($contents)
];

echo json_encode($response);

$stmt->close();
$mysqli->close();
?>
