<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In</title>

    <?php
      include("head.php");
    ?>
  </head>

  <body>

    <div class="container" style="margin-top: 10%">
    
    <div class="col-md-6">
      <form>
        <h2>Silakan Login</h2>
        <br>
        <h4>Email</h4>
        <input type="email" name="email_in" placeholder="Email address" required><br><br> 
        <h4>Password</h4>
        <input type="password" name="pass" placeholder="Password" required>
          <br>
        <button type="submit" class="btn btn-primary btn-block">Log In</button>     
      </form>
    </div>
    <div class="col-md-6">
      <h2>Sistem Informasi KB Al-IMAN</h2>
      <p>Alamat: Sutorejo Tengah X No 2-4 Surabaya, Jawa Timur</p>

      <br>
        <a href="siswa.php" class="btn btn-primary">Tampilan untuk wali murid</a>
      <br>
      <br>
        <a href="guru.php" class="btn btn-primary">Tampilan untuk guru</a>
      <br>
      <br>
        <a href="admin_tu.php" class="btn btn-primary">Tampilan untuk Admin/TU</a>
      <br>

    </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
