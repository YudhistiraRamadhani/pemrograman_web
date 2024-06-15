<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];

//Perbaikan query dengan menutup kurung pada VALUE
$aksi = mysqli_query($koneksi, "INSERT INTO biodata (nama, alamat, email) VALUES ('$nama', '$alamat', '$email')");

if ($aksi) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

?>