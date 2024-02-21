// Query for hidroponik
$sql2 = "SELECT DATE(timestamp) AS date
FROM hidroponik
WHERE timestamp >= DATE_SUB((SELECT MAX(timestamp) FROM hidroponik), INTERVAL 7 DAY) AND nama = 'Hidroponik'
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
$json_datawaktuhidro = "[" . implode(",", $data2) . "]";