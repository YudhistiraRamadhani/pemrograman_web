<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
    .img {
            float: left;
            margin-top: -6%;
            
        }
        body {
            font-family: 'Enriqueta';
            font-size: 22px;
            min-height: 100px;
            background-color: wheat;
            padding: 25px;

        }

        .rounded{
            margin-top: 6%;  
        }
        .materi{
            text-align:center; 
    align-items: center;
    justify-content: center;
    display: flex; 
        }

        .web{
    margin: 10px;
    text-align:center;
    flex-direction: column;
    display: flex; 
    align-items: center;
    justify-content: center;
}
.roundedA{
    float:left ;
    border-radius: 50px 20px;
    margin-top: 60%;
}

.roundedB{
    border-radius: 50px 20px;
    float: right;
    margin-top: 18%;
}
.rounded
 .menu{
  float: right;
  margin-top: -42%;
 }  
 
 .login{
  float: right;
  margin-top: -42%;
 }

.video{
  text-align:center ;
}

.poster4{
  margin-top: 20%;
}
 @media  screen and (max-width: 900px) {
  .rounded{
    width: 50%;
    height: 50%;
  }

  .roundedA{
    width: 40%;
    height: 40%;
  }

  .roundedB{
    width: 40%;
    height: 40%;
  }
  .navbar{
    width: 900%;
    height: 900%;
  }

  .img{
    width: 15%;
    height: 15%;
  }

  .login{
    width: 10%;
    height: 10%;
   
  }
  .menu{
    width: 10%;
    height: 10%;
    margin-top: -26%;
  }
 }

</style>  
</head>

<body>
  <!-- navbar -->

  <div class="d-flex justify-content-center">
<nav class="navbar navbar-expand " >

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a href="#" class="nav-link text-primary" >HOME</a>
        </li>
        <li class="nav-item">
          <a onclick="prompt('apakah mau mendaftar')" href="http://localhost/PROJEK/read.php" class="nav-link text-primary" >Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="https://zoom.us/signin#/login">Session Live Class</a>
        </li>
         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown">Materi yang dipilih</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://acehlc.com/nouns-dalam-bahasa-inggris-jenis-dan-fungsinya/" onclick="alert('bahasa inggris dipilih')">Bahasa inggris</a></li>
            <li><a class="dropdown-item" href="'https://repository.penerbiteureka.com/media/publications/558672-pemrograman-web-html-dan-css-89e5aad7.pdf" onclick="alert('Pemrograman web dasar dipilih')">Pemrograman web dasar</a></li>
            <li><a class="dropdown-item" href="https://www.duniailkom.com/tutorial-belajar-bahasa-pemrograman-c-bagi-pemula/" onclick="alert('Pemrograman Bahasa C dipilih')">Pemrograman Bahasa C</a></li>
           <li><a class="dropdown-item" href="https://ocw.upj.ac.id/files/Handout-GNR105-Pertemuan-1-Pengantar-Dasar-Logika-Matematika.pdf"onclick="alert('matematika dipilih')">Matematika</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown">Video</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/PROJEK/video.php" >Bahasa inggris</a></li>
            <li><a class="dropdown-item" href="http://localhost/PROJEK/vidweb.php" >Pemrograman web dasar</a></li>
            <li><a class="dropdown-item" href="http://localhost/PROJEK/vidC.php" >Pemrograman Bahasa C</a></li>
            <li><a class="dropdown-item" href="http://localhost/PROJEK/videomtk.php">Matematika</a></li>
</ul>
  </div>

 


 
</nav>
</div>
<a href="http://localhost/PROJEK/dasboard.php" >
<img  class="img" src="bg-belajarbersama.png" width="8%" height="8%"> 

</a>

<i class='fas fa-bars' style='font-size:36px'></i>

<div class="d-flex justify-content-center">
    <img src="depan-removebg-preview.png" class="rounded">
</div> 
 <!-- bootstrap 5 sidebar --> 

<!-- Button to open the offcanvas sidebar -->

<a href="http://localhost/PROJEK/registrasi.php">
  <img src="login-removebg-preview.png" class="login" width="4%" height="4%">
</a>
<a href="http://localhost/PROJEK/read.php">



<img class="poster4" src="poster 4.png" height="60%" width="60%">


<img src="poster1.jpeg" class="roundedA" alt="Cinque Terre" width="304" height="236">
 


<img src="poster 2.jpeg" class="roundedB" alt="Cinque Terre" width="304" height="236"> 


</body>
</html>