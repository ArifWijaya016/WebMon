<?php
$servername = "localhost";
$username = "root";  // Ganti dengan username MySQL Anda
$password = "";      // Ganti dengan password MySQL Anda
$dbname = "server";   // Ganti dengan nama database Anda
$table = "biodigester"; // Ganti dengan nama tabel Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari ESP8266
$tdsvalue = $_POST['tds'];
$temp_hidro = $_POST['temp_hidro'];

// Menyimpan data ke database dengan kolom 'nama' yang bernilai 'hidroponik'
$sql = "INSERT INTO $table (tds, temp_hidro, nama) VALUES ($tdsvalue, $temp_hidro, 'hidroponik')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
