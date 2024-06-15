<?php
include 'koneksi1.php';

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $ambil = mysqli_query($koneksi1,"SELECT * FROM registrasi WHERE email = '$email'");

    if (mysqli_num_rows($ambil) === 1) {
        $data = mysqli_fetch_assoc($ambil);
        // Membandingkan kata sandi dengan kata sandi yang disimpan dalam database
        if ($password == $data['password']) {
            // Jika kata sandi cocok, arahkan ke halaman tujuan
            header("location: landingpagenew.php");
            exit();
        } else {
            // Jika kata sandi tidak cocok
            echo "<script>
                  alert('Username atau kata sandi salah');
                  window.location = 'login.php';
                  </script>";
        }
    } else {
        // Jika username tidak ditemukan
        echo "<script>
              alert('Email atau kata sandi salah');
              window.location = 'login.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    <style>
 body{
        margin: 0;
        background: wheat;
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
    .login{
        text-align: center;
    
    }

    </style>

</head>

<body>
<div class="center">


  <div class="login-card">
    <h1>Log-in</h1><br>
    <div class="login">


  <form action="" method="POST">
    <label>Email</label><br>
    <input type="text" name="email" placeholder="Email"><br>
    <label>password</label><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="registrasi.php">Register</a> 
  </div>
</div>
</div>
</div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>