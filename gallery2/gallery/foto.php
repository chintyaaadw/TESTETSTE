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
    <title>Halaman Foto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body id = color>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark" style="margin-bottom: 50px;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" style="font-size: 40px;">Halaman Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarScroll" >
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style=" margin-right: 50px;" >
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php" style="margin-left: 40px;" >Home</a>
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
   
    






    <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
        <table style="margin-bottom: 30px; margin-left: 120px;" >
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto" style="width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto" style="  margin-top: 10px; width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile" style="margin-top: 10px; width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td >
                    <select name="albumid" style="  margin-top: 10px; width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box; border: 1px solid transparent;">
                    <?php
                        include "koneksi.php";
                        $userid=$_SESSION['userid'];
                        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data=mysqli_fetch_array($sql)){
                    ?>
                            <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"  style="margin-top: 10px; background-color: #20c997; color: white; padding: 10px 20px; border: 1px solid #4CAF50; border-radius: 5px; cursor: pointer"></td>
            </tr>
        </table>
        <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
    </form>

    <div class="container text-center" style="max-height: 500px; ">
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
                <th class="col">Aksi</th>
            </tr>

            <?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($conn, "SELECT * FROM foto, album WHERE foto.userid='$userid' AND foto.albumid=album.albumid");
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td><?= $data['fotoid'] ?></td>
                    <td><?= $data['judulfoto'] ?></td>
                    <td><?= $data['deskripsifoto'] ?></ td>
                    <td><?= $data['tanggalunggah'] ?></td>
                    <td>
                        <img src="foto/<?= $data['lokasifile'] ?>" width="200px">
                    </td>
                    <td><?= $data['namaalbum'] ?></td>
                    <td>
                        <?php
                        $fotoid = $data['fotoid'];
                        $sql2 = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="hapus_foto.php?fotoid=<?= $data['fotoid'] ?>">Hapus</a>
                        <a href="edit_foto.php?fotoid=<?= $data['fotoid'] ?>">Edit</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
        </form>
    </div>

   
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>