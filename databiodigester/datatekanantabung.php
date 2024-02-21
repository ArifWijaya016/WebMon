<?php
require 'connection.php';

$sql = "SELECT AVG(tekanan_tabung) as tekanan_tabung
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
    $tekanan_tabung = intval($row['tekanan_tabung']);
    // Tambahkan nilai ke dalam array
    $data[] = $tekanan_tabung;
}

// Balik urutan elemen array, urutan reverse akan membuat data dari yang paling lama ke terbaru dari kiri ke kanan
$data = array_reverse($data);

// Konversi array ke dalam format JSON
$json_datatekanantabung = json_encode($data);

// Tampilkan data dalam format JSON
echo $json_datatekanantabung;
?>
