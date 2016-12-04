<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Komentar Masuk</title>

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
        <div class="row" style="text-align: center;">
          <h1>Lihat Komentar Masuk</h1>
        </div>

        <div class="row">
          <form>
            <div class="form-group">
              <label>Pengirim</label>
              <h3>Siapa pengirimnya</h3>
            </div>
            <div class="form-group">
              <label>Perihal</label>
              <h3>Contoh Perihal</h3>
            </div>
            <br>
            <div class="form-group">
              <label>Isi Komentar</label>
              <textarea class="form-control" rows="5" style="height: 400px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
            </div>

            <br>
            <a href="balas_komentar.php" class="btn btn-default">Balas</a>
          </form>
        </div>






    <?php
      include 'footer.php';
    ?>

  </body>