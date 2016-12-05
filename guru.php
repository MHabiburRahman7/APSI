<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guru</title>

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
      <div class="container">
        <div class="row" style="height: 100%">
          <div class="col-md-4" style="background-color: #e0e0e0">
          <br>
            <h2 style="text-align: center;">Data Pribadi</h2>
            <center>
              <img src="img/foto_guru.jpg" style="margin-top: 5%; margin-bottom: 5%;">
            </center>
            <div class="row">
              <div class="container" style="background-color: #eeeeee">
                <p>Nama: Komang Artanayasa S.Pd</p>
            
                <p>Alamat: Keputih Gg 2, No 12, Surabaya</p>
            
                <p>Nomor Induk: 08456454987512</p>
            
                <p>TTL: Surabya, 15 Mei 1898</p>
            
                <p>Wali Kelas: Kelas KB A</p>
            
                <p>Hobi: Sepak Bola, main catur</p>
              </div>
            </div>
            <br>        
          </div>
          
          <div class="col-md-8" style="background-color: lightblue; height: 100%">
            <br>
            <h3>Pilihan</h3>
            <br>
            <a href="cari_siswa.php" class="btn btn-primary">Kelola nilai</a>
            <br>
            <br>
            <a href="komentar_masuk.php" class="btn btn-primary">Kelola Komentar</a>
            <br>
            <br>
          </div>
          <div class="col-md-8" style="background-color: #90caf9; height: 664px">
            <br>
            <h3>Komentar masuk</h3>
            <br>
            <table class="display dataTable">
              <div class="table responsive">
                <table class="display table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Pengirim</th>
                      <th>Judul</th>
                      <th>Lihat</th>
                    </tr>
                  </thead>
                  <tbody>
                  <!--
                  <tbody style="display: block; max-height: 90px; overflow-y: scroll;">
                  -->
                    <tr>
                      <td>1</td>
                      <td>Siapa</td>
                      <td>Laporan terkini</td>
                      <td><a href="lihhat_komentar.php" class="btn btn-default">Lihat</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Siapa</td>
                      <td>Laporan bisnis</td>
                      <td><a href="" class="btn btn-default">Lihat</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Siapa</td>
                      <td>Laporan</td>
                      <td><a href="" class="btn btn-default">Lihat</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Siapa</td>
                      <td>Hehehe</td>
                      <td><a href="" class="btn btn-default">Lihat</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Siapa</td>
                      <td>Laporan saja</td>
                      <td><a href="" class="btn btn-default">Lihat</a></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Siapa</td>
                      <td>Laporan terdahulu</td>
                      <td><a href="" class="btn btn-default">Lihat</a></td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </table>
          </div>
          <br>
        </div>
      </div>
    </div>

    <?php
      include 'footer.php';
    ?>

  </body>