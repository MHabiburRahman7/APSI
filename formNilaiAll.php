<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Isi seluruh nilai</title>

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
          <h1>Pengisian nilai siswa</h1>
          <h3>Mata pelajaran: (mata pelajaran yang dipilih)</h3>
          <h3>Kelas: (kelas yang dipilih)</h3>
        </div>

        <div class="row">
          <form>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama</label>
                <div class="col-xs-10">
                  <input type="text" name="Nama_siswa">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nilai</label>
                <div class="col-xs-10">
                  <input type="text" name="Nilai_siswa">                  
                </div>
            </div>
            <br>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama</label>
                <div class="col-xs-10">
                  <input type="text" name="Nama_siswa1">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nilai</label>
                <div class="col-xs-10">
                  <input type="text" name="Nilai_siswa1">                  
                </div>
            </div>
            <br>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama</label>
                <div class="col-xs-10">
                  <input type="text" name="Nama_siswa2">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nilai</label>
                <div class="col-xs-10">
                  <input type="text" name="Nilai_siswa2">                  
                </div>
            </div>
            <br>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama</label>
                <div class="col-xs-10">
                  <input type="text" name="Nama_siswa3">                  
                </div>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nilai</label>
                <div class="col-xs-10">
                  <input type="text" name="Nilai_siswa3">                  
                </div>
            </div>
            <br>
            <div>
              <a href="" class="btn btn-default">Sebelumnya</a>
              <a href="" class="btn btn-default">Lanjut</a>
              <br>
              <br>
              <button type="submit" href="" class="btn btn-default">Perbarui nilai</button>
            </div>
          </form>
        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>