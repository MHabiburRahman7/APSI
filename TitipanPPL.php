<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perbarui biodata guru</title>

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
        <br>
          <h1>Perbarui biodata guru</h1>
        </div>

        <div class="row">
          <form>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama</label>
                <div class="col-xs-10">
                  <input type="text" name="nama">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">NIP</label>
                <div class="col-xs-10">
                  <input type="text" name="nip">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Alamat</label>
                <div class="col-xs-10">
                  <input type="text" name="alamat">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Kelas</label>
                <div class="col-xs-10">
                  <input type="text" name="kelas">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Tempat tanggal lahir</label>
                <div class="col-xs-10">
                  <input type="text" name="ttl">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Pas foto</label>
                <div class="col-xs-10">
                  <input type="file" name="foto">     
                </div>
            </div>
            <br>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Perbarui</button>
          </form>

          <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apakah data yang anda isikan sudah benar?</h4>
      </div>
     
      <div class="modal-footer" style="text-align: center;">
        <button type="submit" class="btn btn-default" data-dismiss="modal">Perbarui</button>
      </div>
    </div>

  </div>
</div>
        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>