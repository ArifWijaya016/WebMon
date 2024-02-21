<?php
$servername = "localhost";
$username = "admin";
$password = "root";
$dbname = "server";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query for irigasi
$sqlIrigasi = "SELECT * FROM irigasi WHERE nama = 'Lahan 1'  ORDER BY id DESC LIMIT 1";
$resultIrigasi = $conn->query($sqlIrigasi);

// Query for biodigester
$sqlBiodigester = "SELECT * FROM biodigester WHERE nama = 'Biodigester'  ORDER BY id DESC LIMIT 1";
$resultBiodigester = $conn->query($sqlBiodigester);

// Query Hidro
$sqlhidroponik = "SELECT * FROM hidroponik WHERE nama = 'Hidroponik'  ORDER BY id DESC LIMIT 1";
$resulthidroponik = $conn->query($sqlhidroponik);  // Uncomment this line


// Data array for irigasi
$dataIrigasi = array();
if ($resultIrigasi->num_rows > 0) {
    $rowIrigasi = $resultIrigasi->fetch_assoc();
    $dataIrigasi = array(
        "sensor_kelembaban" => $rowIrigasi["sensor_kelembaban"],
        "sensor_n" => $rowIrigasi["sensor_n"],
        "sensor_p" => $rowIrigasi["sensor_p"],
        "sensor_k" => $rowIrigasi["sensor_k"],
        "sensor_ph" => $rowIrigasi["sensor_ph"]
    );
}

// Data array for biodigester
$dataBiodigester = array();
if ($resultBiodigester->num_rows > 0) {
    $rowBiodigester = $resultBiodigester->fetch_assoc();
    $dataBiodigester = array(
        "tekanan_tangki" => $rowBiodigester["tekanan_tangki"],
        "tekanan_tabung" => $rowBiodigester["tekanan_tabung"],
        "temperature" => $rowBiodigester["temperature"],
        "ph_bio" => $rowBiodigester["ph_bio"],
        "karbon_dioksida" => $rowBiodigester["karbon_dioksida"],
        "karbon_monoksida" => $rowBiodigester["karbon_monoksida"]
    );
}

// Data array for hidroponik
$datahidroponik = array();
if ($resulthidroponik->num_rows > 0) {  // Use $resulthidroponik here
    $rowhidroponik = $resulthidroponik->fetch_assoc();
    $datahidroponik = array(
        "tds" => $rowhidroponik["tds"],
        "temp_hidro" => $rowhidroponik["temp_hidro"]  // Use $rowhidroponik here
    );
}

// Merge both data arrays
$resultData = array_merge($dataIrigasi, $dataBiodigester, $datahidroponik);

// Encode as JSON and output
echo json_encode($resultData);

// Close the connection
$conn->close();
?>
