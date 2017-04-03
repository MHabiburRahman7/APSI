<?php
//  include 'lib/main.php';
  include 'config/database.php';
  include 'objects/siswa.php';
  include 'objects/nilai.php';
  include 'objects/matapelajaran.php';
  session_start();
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

    <title>Nilai Siswa</title>

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
          <h1>Data nilai </h1>
          <?php
            $database = new Database();
            $db = $database->getConnection();

            $sis = new Siswa($db);
            $sis->id = $_GET['id'];

            $sis->readName();

            echo "<h3>Nama Siswa: ".$sis->name."</h3>";
          ?>
          <br>
          <a href="formInsertNilai.php" class="btn btn-default">Masukkan nilai baru</a>
        </div>

        <div class="row" style="max-width: 70%">
          <h3>Tahun ajaran xxxx/xxxx</h3>
          <table class="display dataTable">
            <thead>
                    <tr>
                      <th>No</th>
                      <th>Indikator</th>
                      <th>Nilai</th>
                      <th>Ubah</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php

                    $sth = $db->prepare("SELECT id_nilai, nilai_siswa, tahun, nama_pelajaran FROM nilai WHERE nis_siswa = ?");
                      $sth->bindParam(1, $sis->id);
                      $sth->execute();


                      while ($row = $sth->fetch(PDO::FETCH_ASSOC))
                      {
                          extract($row);
                          echo '<tr>';
                          echo '  <td>'.$id_nilai.'</td>';
                          echo '  <td>'.$nama_pelajaran.'</td>';
                          echo '  <td>'.$nilai_siswa.'</td>';
                          echo '  <td>';
                          echo '<a href="formNilai.php?id_siswa='.$_GET['id'].'&id_mapel='.$id_nilai.'" class="btn btn-default left-margin">Edit</a>';
                          echo '<a delete-id="'.$id_nilai.'" class="btn btn-danger delete-object">Delete</a>';
                          echo '</td>';
                          echo '</tr>';
                      } 

                  ?>
                   
                  </tbody>
          </table>
        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>