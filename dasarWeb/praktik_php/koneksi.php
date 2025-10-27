<?php
// --- Konfigurasi Database ---

$host = "localhost";        // Nama server database (biasanya 'localhost' untuk XAMPP)
$db_user = "root";          // Username database (default 'root' untuk XAMPP)
$db_pass = "";              // Password database (default kosong untuk XAMPP)
$db_name = "prakwebdb"; // <-- GANTI DENGAN NAMA DATABASE ANDA


$connect = mysqli_connect($host, $db_user, $db_pass, $db_name);


if (!$connect) {
    
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>