<?php
require 'connection.php';


// Query for hidroponik
$sql3 = "SELECT DATE(timestamp) AS date
FROM hidroponik
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM hidroponik), INTERVAL 7 DAY) AND nama = 'Hidroponik'
GROUP BY DATE(timestamp) 
ORDER BY date DESC";

$result = $connection->query($sql3);

// Buat array kosong untuk menampung data
$data3 = array();

// Looping untuk mengambil data dari hasil query
while ($row = $result->fetchColumn()) {
    // Konversi nilai timestamp ke dalam format waktu dengan string H:i:s
    $waktu3 = (new DateTime($row))->format('Y-m-d');
    // Tambahkan nilai ke dalam array dengan format yang diinginkan
    $data3[] = "String('$waktu3')";
}

// Balik urutan array agar data terbaru berada di indeks pertama
$data3 = array_reverse($data3);

// Gabungkan array menjadi sebuah string dengan format yang diinginkan
$json_datawaktu3 = "[" . implode(",", $data3) . "]";

?>