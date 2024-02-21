<?php
require 'connection.php';

// Query for irigasi
$sql2 = "SELECT DATE(timestamp) AS date
FROM irigasi
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM irigasi), INTERVAL 7 DAY) AND nama = 'Lahan 1'
GROUP BY DATE(timestamp) 
ORDER BY date DESC";

$result = $connection->query($sql2);

// Buat array kosong untuk menampung data
$data2 = array();

// Looping untuk mengambil data dari hasil query
while ($row = $result->fetchColumn()) {
    // Konversi nilai timestamp ke dalam format waktu dengan string H:i:s
    $waktu2 = (new DateTime($row))->format('Y-m-d');
    // Tambahkan nilai ke dalam array dengan format yang diinginkan
    $data2[] = "String('$waktu2')";
}

// Balik urutan array agar data terbaru berada di indeks pertama
$data2 = array_reverse($data2);

// Gabungkan array menjadi sebuah string dengan format yang diinginkan
$json_datawaktu = "[" . implode(",", $data2) . "]";



// Query for hidroponik
$sql4 = "SELECT DATE(timestamp) AS date
FROM hidroponik
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM hidroponik), INTERVAL 30 DAY) AND nama = 'Hidroponik'
GROUP BY DATE(timestamp) 
ORDER BY date DESC";

$result = $connection->query($sql4);

// Buat array kosong untuk menampung data
$data4 = array();

// Looping untuk mengambil data dari hasil query
while ($row = $result->fetchColumn()) {
    // Konversi nilai timestamp ke dalam format waktu dengan string H:i:s
    $waktu4 = (new DateTime($row))->format('Y-m-d');
    // Tambahkan nilai ke dalam array dengan format yang diinginkan
    $data4[] = "String('$waktu4')";
}

// Balik urutan array agar data terbaru berada di indeks pertama
$data4 = array_reverse($data4);

// Gabungkan array menjadi sebuah string dengan format yang diinginkan
$json_datawaktu4 = "[" . implode(",", $data4) . "]";

// Query for biodigester
$sql3 = "SELECT DATE(timestamp) AS date
FROM biodigester
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM biodigester), INTERVAL 7 DAY) AND nama = 'Biodigester'
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
