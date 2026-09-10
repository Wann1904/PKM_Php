<?php
$host     = "localhost";
$user     = "Ridwanmp";      
$database = "db_user";  

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>