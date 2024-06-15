<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>
    body{
      padding: 0;
      margin: 0;
      font-family: sans-serif;
      background-color: purple;
    }
    .box-form{
      width: 50%;
      height: 400px;
    
      margin: 1% auto;
    }
.form{
  background: white;
}
    .tittle-form{
      max-width:  100%;
      height: 40px;
     
      background-color: wheat;
      line-height: 40px;
      padding-left: 1%;
      
      color: #009900;
    }

    table tr {
      height: 40px;
    }
    table tr td input [type=text] {
      height: 30px;
      margin: 1% 0;
      width: 70%;
      font-size: 17px;
      padding-left: 1%;
    }

    table tr td input [type=submit] {
      height: 30px;
      margin: 1% 0;
      width: 20%;
      font-size: 17px;
    cursor: pointer;
    }

  </style>
</head>

<body>
  <div class="box-form">
    <div class="tittle-form">
      Pendaftaran 
          <h3>Silahkan isi data di bawah ini</h3>
    </div>
    <form action="" method="post" class="form">
 <tr>
  <table  border="0"  width="50%">
  <td width="20%">Nama Lengkap </td>
  <td width="2%">: </td>
  <td width="78%"><input type="text" name="nama"> </td>
 </tr>
 <br>
 <tr>
  <td>Jenis Kelamin</td>
  <td>:</td>
  <td><input type="radio" name="jk" value="1">Pria</td>
  <td><input type="radio" name="jk" value="2">Wanita</td>
 </tr>
 <br>
 <tr>
  <td>Tanggal Lahir</td>
  <td>:</td>
  <td><input type="date" name="tgl"></td>
 </tr>
 <br>
 <tr>
  <td>Telepon</td>
  <td>:</td>
  <td><input type="text" name="telp"></td>
 </tr>
 <br>
 <tr>
  <td>Alamat</td>
  <td>:</td>
  <td><input type="text" name="alamat"></td>
 </tr>
 <br>
 <tr>
  <td></td>
  <td></td>
  <td>
  <td>
    <button type="submit" name="daftar">DAFTAR</button>

</td>
</td>
 </tr>
 </table>
</form>
<?php
if(isset($_POST['daftar'])){
  $conn = mysqli_connect('localhost','root','','belajar_database');
  
  // Perbaiki query INSERT INTO dan tambahkan penanganan kesalahan
  $insert = mysqli_query($conn, "INSERT INTO tb_user VALUES (NULL, '".$_POST['nama']."', 
  '".$_POST['jk']."',  '".$_POST['tgl']."', '".$_POST['telp']."', '".$_POST['alamat']."')");
  
  // Tambahkan penanganan untuk pesan kesalahan atau sukses
  if($insert){
      // Redirect pengguna ke halaman login setelah berhasil mendaftar
      header("Location: http://localhost/projek%20asd%20new/login.php");
      exit(); // Pastikan skrip berhenti di sini untuk mencegah eksekusi lebih lanjut
  } else {
      echo "Gagal menambahkan data: " . mysqli_error($conn);
  }
}


?>
  </div>
</body>
</html>