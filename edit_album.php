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
    <title>Halaman Edit Album</title>
    <link rel="stylesheet" type="text/css" href="style.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body id = color>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark" style="margin-bottom: 50px;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" style="font-size: 40px;">Halaman Edit Album</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarScroll" >
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style=" margin-right: 50px;" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php" style="margin-left: 40px; ">Home</a>
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

    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        <table  style="margin-bottom: 50px;  margin-left: 120px;">
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" value="<?=$data['namaalbum']?>" style="width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>" style=" margin-top: 10px; width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah" style="margin-top: 10px; background-color: #20c997; color: white; padding: 5px 20px; border: 1px solid #4CAF50; border-radius: 5px; cursor: pointer"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>

    
</body>
</html>