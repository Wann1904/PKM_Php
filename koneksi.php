```php
<?php

$host     = getenv('MYSQLHOST');
$port     = getenv('MYSQLPORT') ?: 3306;
$user     = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$database = getenv('MYSQLDATABASE');

$koneksi = mysqli_connect(
    $host,
    $user,
    $password,
    $database,
    (int)$port
);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
```
