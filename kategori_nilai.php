<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nilai Siswa</title>

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
          <h1>Data nilai</h1>
          <h3>Pilih kategori nilai</h3>
        </div>

        <div class="row">
          <select class="form-control" style="width: 50%">
            <option value="ngaji">Membaca Iqro</option>
            <option value="hafal">Hafalan</option>
            <option value="takra">Tata krama</option>
            <option value="agama" selected>Agama</option>
          </select>
          <br>
        </div>

        <div class="row" style="text-align: center;">
          <h3>Pilih kelas</h3>
        </div>
        
        <div class="row">
          <select class="form-control" style="width: 50%">
            <option value="A">Kelas A</option>
            <option value="B">Kelas B</option>
            <option value="C">Kelas C</option>
            <option value="D">Kelas D</option>
          </select>
          <br>
          <br>
          <button type="submit" class="btn btn-default" href="#0">Lanjutkan</button> 
          <br>
          <br>
          <br>
          <a href="cari_siswa.php" class="btn btn-default">Lihat contoh</a> 
        </div>

      </div>

      </center>
    </div>
  </body>

    <?php
      include('footer.php');
    ?>