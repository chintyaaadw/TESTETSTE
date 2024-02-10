<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Album</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body  id="color" >
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark" style="margin-bottom: 50px;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" style="font-size: 40px;">Halaman Album</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarScroll" >
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style=" margin-right: 50px;" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php" style="margin-left: 40px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="album.php" >Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foto.php" >Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
</ul>
    </div>
  </div>
</nav>
    

    <form action="tambah_album.php" method="post">
        <table style="margin-bottom: 50px;  margin-left: 120px;">
            <tr >
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" style="width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" style=" margin-top: 10px; width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"  style=" margin-top: 10px; background-color: #20c997; color: white; padding: 5px 20px; border: 1px solid #4CAF50; border-radius: 5px; cursor: pointer"></td>
            </tr>
        </table>
    </form>
</div>

<div class="container text-center" style="max-height: 500px; overflow-y: auto;">
        <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
            <table class="table table-striped"  style="width: 100%; margin: 0 auto;" >
            <tr style="border-spacing: 50px;">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        <a href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                        <a href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
          </form>
          </div>
          <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>