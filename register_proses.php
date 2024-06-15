<?php
// Menghubungkan ke database
$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "db_pendaftaran";

$koneksi = mysqli_connect($hostname, $user, $password, $db_name) or die(mysqli_error($koneksi));

// Mengambil data dari formulir
$email = $_POST['email'];
$password = $_POST['password'];

// Memasukkan data ke database
$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Redirect ke halaman login
    header("Location: login.php");
    exit();
} else {
    echo "Registrasi gagal. Silakan coba lagi.";
}

mysqli_close($koneksi);
?>
