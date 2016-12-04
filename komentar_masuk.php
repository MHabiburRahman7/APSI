<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Komentar masuk</title>

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
          <h1>Komentar masuk</h1>
          <br>
          <a href="" class="btn btn-default">Buat komentar</a>
        </div>

            <table class="display dataTable">
              <div class="table responsive">
                <table class="display table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Pengirim</th>
                      <th>Judul</th>
                      <th>Balas</th>
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
                      <td><a href="balas_komentar.php" class="btn btn-default">Balas</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Siapa</td>
                      <td>Laporan bisnis</td>
                      <td><a href="" class="btn btn-default">Balas</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Siapa</td>
                      <td>Laporan</td>
                      <td><a href="" class="btn btn-default">Balas</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Siapa</td>
                      <td>Hehehe</td>
                      <td><a href="" class="btn btn-default">Balas</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Siapa</td>
                      <td>Laporan saja</td>
                      <td><a href="" class="btn btn-default">Balas</a></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Siapa</td>
                      <td>Laporan terdahulu</td>
                      <td><a href="" class="btn btn-default">Balas</a></td>
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </table>
          </div>
          <br>
        </div>

    <?php
      include 'footer.php';
    ?>

  </body>