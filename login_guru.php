<?php
  $wrong_pass='<p style="color:red;">Password anda salah</p>';
    
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

    <title>Log In sebagai Guru</title>

    <?php
      include("head.php");
    ?>
  </head>

  <body>

    <div class="container" style="margin-top: 8%">
    
      <div class="row" style="padding-left: 15%; padding-right: 15%">
        <form action="cek_login.php" method="post" class="form-horizontal">
          <h2 style="text-align: center;">Silakan Login sebagai Guru</h2>
          <br>
          <h4>NIP</h4>
          <input type="text" name="nip" placeholder="Nomor Induk" required><br><br> 
          <h4>Password</h4>
          <input type="password" name="password" placeholder="Password" required>
            <br>
          <button type="submit" class="btn btn-primary btn-block">Log In</button>
          <input type="hidden" value="guru" name="form">     
        </form>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  <footer>
    <?php
      include 'footer.php';
    ?>

  </footer>
</html>