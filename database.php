<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name ="form_login";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi database rusak";
    die("error");

}
echo "koneksi berhasil"
?>