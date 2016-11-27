<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perbarui pembayaran spp</title>

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
          <h1>Perbarui status spp siswa</h1>
        </div>

        <div class="row">
          <form>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama</label>
                <div class="col-xs-10">
                  <input type="text" name="Nama_siswa" placeholder="Habib">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Status</label>
                <div class="col-xs-10">
                  <input type="text" name="Status_spp" placeholder="Belum bayar">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Tanggal pembayaran</label>
                <div class="col-xs-10">
                  <input type="text" name="tgl" placeholder="DD/MM/YYYY">           
                </div>
            </div>
          </form>
          <button class="btn btn-default" type="submit">Perbarui</button>
        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>