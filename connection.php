<?php
$dbname = "server";
$servername = "localhost";
$username = "admin";
$password = "root";

// Start using PDO
$pdo = "mysql:host=$servername; dbname=$dbname";
$connection = new PDO("mysql:host=$servername;dbname=$dbname", 'admin', 'root');
if (!$connection) {
  die("Fatal Error: Connection Failed!");
}

?>
