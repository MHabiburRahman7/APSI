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
              <input type="text" name="penerima">
            </div>
            <div class="form-group">
              <label>Perihal</label>
              <input type="text" name="penerima">
            </div>
            <br>
            <div class="form-group">
              <label>Isi Komentar</label>
              <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
            </div>

            <br>
            <input type="file" class="form-control-file" name="">
            <br>
            <button type="submit">Submit</button>
          </form>
        </div>






    <?php
      include 'footer.php';
    ?>

  </body>