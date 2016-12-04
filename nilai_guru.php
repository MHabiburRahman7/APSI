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
          <h3>Nama Siswa: Ahmad Istiqlal</h3>
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
                    <tr>
                      <td>1</td>
                      <td>Hafalan</td>
                      <td>100</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Agama</td>
                      <td>85</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr> 
                    <tr>
                      <td>3</td>
                      <td>Doa sehari hari</td>
                      <td>90</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Tata krama</td>
                      <td>89</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                  </tbody>
          </table>
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
                    <tr>
                      <td>1</td>
                      <td>Hafalan</td>
                      <td>100</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Agama</td>
                      <td>85</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr> 
                    <tr>
                      <td>3</td>
                      <td>Doa sehari hari</td>
                      <td>90</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Tata krama</td>
                      <td>89</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                  </tbody>
          </table>
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
                    <tr>
                      <td>1</td>
                      <td>Hafalan</td>
                      <td>100</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Agama</td>
                      <td>85</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr> 
                    <tr>
                      <td>3</td>
                      <td>Doa sehari hari</td>
                      <td>90</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Tata krama</td>
                      <td>89</td>
                      <td><a href="formNilai.php" class="btn btn-default">Ubah</a></td>
                    </tr>
                  </tbody>
          </table>
        </div>

      </center>
    </div>

  </body>

    <?php
      include('footer.php');
    ?>