<?php
$host="localhost";
$user="root";
$password="";
$db_name="pendaftaran";

$conn= mysqli_connect($host,$user,$password,$db_name);

if (mysqli_connect()){
 echo "koneksi gagal :". mysqli_connect_error();
}

$koneksi = mysqli_connect("localhost","root","","pendaftaran");
if (mysqli_connect_errno()){
    echo "Koneksi gagal :" . mysqli_connect_error();
}
?>