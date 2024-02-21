<?php
require 'connection.php';


$sql = "SELECT AVG(tekanan_tangki) as tekanan_tangki
FROM biodigester
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM biodigester), INTERVAL 7 DAY) AND nama = 'Biodigester'
GROUP BY DATE(timestamp)
ORDER BY DATE(timestamp) DESC;";
$result = $connection->query($sql);

// Buat array kosong untuk menampung data
$data = array();

// Looping untuk mengambil data dari hasil query
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  // Konversi nilai dari string ke integer
  $sensor_n = intval($row['tekanan_tangki']);
  // Tambahkan nilai ke dalam array
  $data[] = $sensor_n;
}

// Balik urutan elemen array urutan reverse akan mmebuat data dari yg paling lama ke terbaru dari kiri ke kanan
$data = array_reverse($data);

// Konversi array ke dalam format JSON
$json_datatekanan_tangki = json_encode($data);

// Tampilkan data dalam format JSON
// echo $json_dataph;
?>
