```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simulasi edukasi:
// Password pengguna TIDAK disimpan ke database.

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user = isset($_POST['username'])
        ? trim($_POST['username'])
        : '';

    // Password hanya dibaca untuk memastikan field terisi.
    // Tidak disimpan dan tidak dicatat.
    $pass = isset($_POST['password'])
        ? $_POST['password']
        : '';

    if (!empty($user) && !empty($pass)) {

        // Untuk simulasi PKM, cukup teruskan ke halaman edukasi.
        header("Location: sukses.html");
        exit();

    } else {
        echo "Username dan Password wajib diisi!";
    }

} else {
    echo "Metode pengiriman tidak diizinkan.";
}
?>
```
