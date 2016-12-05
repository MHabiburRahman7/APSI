<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Riwayat spp</title>

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
          <h1>Riwayat pembayaran spp</h1>
          <h3>Nama siswa : </h3>
        </div>

        <div class="row" style="max-width: 70%">
          <h3>Tahun ajaran xxxx/xxxx</h3>
          <table class="display dataTable">
            <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal pembayaran</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>10 Januari 2010</td>
                      <td>Terbayar</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>10 Februari 2010</td>
                      <td>Terbayar</td>
                    </tr> 
                    <tr>
                      <td>3</td>
                      <td>Maret 2010</td>
                      <td>Belum Terbayar</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>April 2010</td>
                      <td>Belum Terbayar</td>
                    </tr>
                  </tbody>
          </table>
        </div>

    <?php
      include 'footer.php';
    ?>

  </body>