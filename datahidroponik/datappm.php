<?php
require 'connection.php';

$sql = "SELECT AVG(tds) as tds
FROM hidroponik
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM hidroponik), INTERVAL 30 DAY) AND nama = 'Hidroponik'
GROUP BY DATE(timestamp)
ORDER BY DATE(timestamp) DESC;";
$result = $connection->query($sql);

// Buat array kosong untuk menampung data
$data = array();

// Looping untuk mengambil data dari hasil query
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // Konversi nilai dari string ke integer
    $sensor_n = intval($row['tds']);
    // Tambahkan nilai ke dalam array
    $data[] = $sensor_n;
}

// Balik urutan elemen array, urutan reverse akan membuat data dari yang paling lama ke terbaru dari kiri ke kanan
$data = array_reverse($data);

// Konversi array ke dalam format JSON
$json_datatds = json_encode($data);

// Tampilkan data dalam format JSON
echo $json_datatds
?>
