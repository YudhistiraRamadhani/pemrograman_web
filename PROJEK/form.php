<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-color: purple;
   
}
.form{
  
 
    text-align: center;
    background: white;
    width: 480px;
    height: 480px;
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    margin: auto;
}

.submit{
    margin-top: 10%;
}

.materi{
    margin-top: 10%;
}
</style>
<body>
<?php

$name = $alamat = $email = $contact = $pendidikan = $materiyangdipilih ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $alamat = test_input($_POST["alamat"]);
  $email = test_input($_POST["email"]);
  $contact = test_input($_POST["contact"]);
  $pendidikan = test_input ($_POST["pendidikan"]);
  $materiyangdipilih = test_input ($_POST["materiyangdipilih"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form class="form" method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h3>Form Pendaftaran Pembelajaran Online</h3> 
    <img src="tutwuri.png" width="10%" height="10%">
    <br>
    <label>Nama</label>
    <br> <br>
    <input type="text" name="nama">
    <br><br>

    <label>Alamat</label>
    <br> <br>
    <input type="text" name="alamat" >
    
    <br><br>

    <label>E-mail</label>
    <br>
    <input type="text" name="email" ">
   
    <br><br>
    <label>contact</label>
    
    <br><br>
    <input type="text" name="contact" ">
  
    <br><br>
    <label>Unggah berkas persyaratan pendaftaran</label>
    <br>
    <input type="file" id="myFile" name="filename" >
    <br>
  
    <select name="pendidikan">
      <option>pilih pendidikan saat ini</option>
      <option>SD</option>
      <option>SMP</option>
      <option>SMA</option>
      <option>KULIAH</option>
    </select>
    <br>
    <select name="materiyangdipilih">
    <option>materi yang dipilih</option>
      <option>matematika</option>
      <option>bahasa inggris</option>
      <option>pemrograman web</option>
      <option>pemrograman</option>
      <option>materi utbk</option>


    </select>
    <br>

    <input onclick = klik() type="submit" name="submit" value="Submit" >
</form>
<?php
echo "<h3>data :</h3>";
echo $nama;
echo "<br>";
echo $alamat;
echo "<br>";
echo $email;
echo "<br>";
echo $contact;

?>

<script>
function klik(){
alert("anda telah terdaftar");
}
</script>
</body>
</html>