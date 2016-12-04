<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pencarian siswa</title>

    <?php
      include("head.php");
    ?>
  </head>
  
  <body>
    <!--Untuk Navbar-->
    <header>
    <?php
      include 'navbar.php';
    ?>
    </header>

    <div class="content">
      <center>
      <div class="container">
        <div class="row" style="text-align: center;">
          <h1>Pencarian siswa</h1>
        </div>

        <div class="row">
          <label>
            <h2>Masukkan nama siswa</h2>
          </label>
          <input type="text" name="nama_siswa" placeholder="Nama lengkap siswa">
          <br>
          <br>
          <button type="submit" class="btn btn-default">Lanjutkan</button>
          <a href="nilai_guru.php" class="btn btn-default">Lihat contoh</a>
        </div>

        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>