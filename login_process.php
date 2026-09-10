<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = isset($_POST['username'])
        ? trim($_POST['username'])
        : '';

    // Password hanya digunakan untuk mengecek apakah field diisi.
    // Isi password TIDAK disimpan ke database.
    $password = isset($_POST['password'])
        ? $_POST['password']
        : '';

    if (!empty($username) && !empty($password)) {

        // Hanya username yang disimpan.
        $stmt = $koneksi->prepare(
            "INSERT INTO users (username) VALUES (?)"
        );

        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
            header("Location: sukses.html");
            exit();
        } else {
            echo "Gagal menyimpan data: " . $stmt->error;
        }

        $stmt->close();

    } else {
        echo "Username dan Password wajib diisi!";
    }

} else {
    echo "Metode pengiriman tidak diizinkan.";
}

$koneksi->close();
?>
