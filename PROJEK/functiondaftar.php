<?php
require 'functiondaftar.php';

if (isset($_POST["register"])) {
    if (register($_POST)) {
        echo "<script>alert('user baru ditambahkan');</script>";
    } else {
        echo "<script>alert('Registrasi gagal');</script>";
    }
}

function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));  
    $email = strtolower(stripslashes($data["email"]));  
    $password = mysqli_real_escape_string($conn, $data["password"]);  
    $password2 = mysqli_real_escape_string($conn, $data["password2"]); 

    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    
}
?>
