<?php
  include 'config/database.php';
  include 'objects/siswa.php';
  include 'objects/nilai.php';

  session_start();
  $id_nilai;
  $nis_siswa;

  $id_nilai = $_GET['id_mapel'];
  $id_siswa = $_GET['id_siswa'];

  $database = new Database();
  $db = $database->getConnection();

  $sth = $db->prepare("SELECT nama_siswa FROM siswa WHERE nis_siswa = ?");
  $sth->bindParam(1, $id_siswa);
  $sth->execute();

  $result = $sth->fetch(PDO::FETCH_ASSOC);

  $map = $db->prepare("SELECT nilai_siswa FROM nilai WHERE id_nilai = ?");
  $map->bindParam(1, $id_nilai);
  $map->execute();
  //$next = $sth
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Isi nilai</title>

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
          <h3>Tahun Ajaran: xxxx/xxxx</h3>
        </div>

        <div class="row">
          <form>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nama Siswa</label>
                <?php
                  echo "<h3>".$result."</h3>";
                ?>
            </div>
            <div class="form-group row" >
              <label class="col-xs-2 col-form-label">Nilai</label>
                <div class="col-xs-10">
                  <input type="text" name="Nilai_siswa" placeholder="<?php echo $map; ?>
                  ">                  
                </div>
            </div>
            <div>
              <a href="" class="btn btn-default">Perbarui nilai</a>
            </div>
          </form>
        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>