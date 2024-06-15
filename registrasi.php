<?php
include 'koneksi1.php';

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $cek_user = mysqli_query($koneksi1,"SELECT * FROM registrasi WHERE email ='$email'");
    $cek_login = mysqli_num_rows($cek_user);

    if ($cek_login > 0) {
        echo "<script>
        alert('Username telah terdaftar');
        window.location = 'registrasi.php';
        </script>";
    } else {
        mysqli_query($koneksi1,"INSERT INTO registrasi VALUES('','$nama', '$email', '$password1')");
        echo "<script>
        alert('Data berhasil dikirim');
        window.location = 'login.php';
        </script>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
    body{
        margin: 0;
        background: linear-gradient(120deg,#2980b9, #8e44ad);
        padding: 0;
        font-family: montserrat;
        height: 100vh;
    }
    .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        border-radius: 10px;
    }
    .center h1{
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;

    }

    .center form{
        padding: 0 40px;
        box-sizing: border-box;

    }

    form .txt_field{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;


    }
    .form{
        text-align: center;
    }
</style>

 
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
    
    <div class="main-agileinfo">
        <div class="center">

      
    <h1>REGISTRASI</h1><br>
        
       <div class="form">

 
            <form action="" method="POST">
                <label>Nama</label><br>
                <input class="text" type="text" name="nama" placeholder="Nama Lengkap" required><br>
                <label>EMAIL</label><br>
                <input class="text email" type="text" name="email" placeholder="email" required><br>
                <label>Password</label><br>
                <input class="text" type="password" name="password1" placeholder="Password" required><br>
                <label>Konfirmasi Password</label><br>
                <input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required><br>

                <input class="input" type="submit" value="REGISTER" name="submit">
            </form>
        </div>
    </div>
</div>
</div>
        
</body>
</html>
