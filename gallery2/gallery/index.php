<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body id="color">
  <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
  <nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark" style="margin-bottom: 50px;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" style="font-size: 40px;"> Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarScroll" >
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style=" margin-right: 50px;" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php" style="margin-left: 40px;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php" >Registrasi</a>
        </li>
    </div>
  </div>
</nav>
<?php
        }else{
    ?>
      
    <nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark" style="margin-bottom: 50px;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" style="font-size: 40px;">Halaman Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarScroll" >
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style=" margin-right: 50px;" >
           <li  class="nav-item">
               <a class="nav-link" aria-current="page" href="index.php"  style="margin-left: 40px;">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="album.php">Album</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="foto.php">Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        </div>
  </div>
</nav>
        <?php
        }
        ?>
    
    
    
    <div class="container text-center" style="max-height: 500px;">
        <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
            <table class="table table-striped"  style="width: 100%; margin: 0 auto;" >
            <tr style="border-spacing: 50px;">
                <th class="col">ID</th>
                <th class="col">Judul</th>
                <th class="col">Deskripsi</th>
                <th class="col">Tanggal Unggah</th>
                <th class="col">Foto</th>
                <th class="col">Nama Album</th>
                <th class="col">Jumlah Like</th>
            </tr>
        <?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from foto where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
                ?>
            <tr>
                <td><?=$data['fotoid']?></td>
                <td><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td><?=$data['tanggalunggah']?></td>
                <td>
                    <img src="foto/<?=$data['lokasifile']?>" width="200px">
                </td>
                <td>
                    <?php
                        $fotoid=$data['fotoid'];
                        $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                        ?>
                </td>
                <td>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>">Like</a>
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                </td>
            </tr>
            <?php
            }
            ?>
            </div>
            </form>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
