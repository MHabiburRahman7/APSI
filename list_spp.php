<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar spp</title>

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
          <h1>Data pembayaran spp</h1>
          <a href="formSpp.php" class="btn btn-default">Tambah data pembayaran per siswa</a>
          <a href="" class="btn btn-default">Tambah data pembayaran per semester</a>
        </div>

        <div class="row" style="max-width: 70%">
          <table class="display dataTable">
            <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama siswa</th>
                      <th>Nomor induk</th>
                      <th>Status pembayaran</th>
                      <th>Ubah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Cahya S</td>
                      <td>001</td>
                      <td>Sudah</td>
                      <td><a href="formSpp.php" class="btn btn-default">Lihat detail</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Irzal D</td>
                      <td>002</td>
                      <td>Sudah</td>
                      <td><a href="" class="btn btn-default">Lihat detail</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Habib W</td>
                      <td>003</td>
                      <td>Belum</td>
                      <td><a href="" class="btn btn-default">Lihat detail</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Kukuh S</td>
                      <td>004</td>
                      <td>Belum</td>
                      <td><a href="" class="btn btn-default">Lihat detail</a></td>
                    </tr>
                  </tbody>
          </table>
        </div>



        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>