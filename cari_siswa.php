<?php
  include 'config/database.php';
  session_start()
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

    <title>Pencarian siswa</title>

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
          <h1>Pencarian siswa</h1>
        </div>

        <div class="row">
          <label>
            <h2>Masukkan nama siswa</h2>
          </label>
          <form action="nilai_guru.php" method="post">
            <input type="text" name="nama_siswa" placeholder="Nama lengkap siswa">  
          </form>
          <br>
          <br>
          <button type="submit" class="btn btn-default">Lanjutkan</button>
        </div>

        <div class="row" style="max-width: 70%">
          <h3>Tahun ajaran xxxx/xxxx</h3>
          <table class="display dataTable">
            <thead>
                    <tr>
                      <th>No induk</th>
                      <th>Nama siswa</th>
                      <th>Lanjutkan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $database = new Database();
                      $db = $database->getConnection();

                      $sth = $db->prepare("SELECT nis_siswa, nama_siswa FROM siswa");
                      $sth->execute();

                      while ($row = $sth->fetch(PDO::FETCH_ASSOC))
                      {
                          extract($row);
                          echo '<tr>';
                          echo '  <td>'.$nis_siswa.'</td>';
                          echo '  <td>'.$nama_siswa.'</td>';
                          echo '  <td>';
                          echo '<a href="nilai_guru.php?id='.$nis_siswa.'" class="btn btn-default left-margin">Edit</a>';
                          echo '<a delete-id="'.$nis_siswa.'" class="btn btn-danger delete-object">Delete</a>';
                          echo '</td>';
                          echo '</tr>';
                      } 

                  ?>

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