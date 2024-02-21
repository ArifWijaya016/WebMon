<?php
require 'connection.php';

$sql = "SELECT tekanan_tangki FROM biodigester ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

// Mengubah data ke format JSON
echo json_encode($data);

$conn->close();
?>
