<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="PerPusWeb (Perpustakaan Berbasis Web)">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="../../favicon.ico">

    <title>PerPusWeb (Perpustakaan Berbasis Web)</title>

    <!-- Bootstrap core CSS -->
    <link href="aset/css/css.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="img/page-background.png">

    <div class="container">

      <form class="form-signin" action="proseslogin.php" method="post">
        <center><h2 class="form-signin-heading"><span class="glyphicon glyphicon-th-large"></span> PerPusWeb </h2></center>
        <div class="col">
           
          <input type="text" name="username" placeholder="Username" required>
          <br>
          <input type="password" name="password" placeholder="Password" required>
          <br>
          <button type="submit">Login</button>
        </div>
      </form>

    </div> <!-- /container -->
    
    <center><h5 class="form-signin">Copyright &copy; <a href="#" data-toggle="modal" data-target="#contact">Hakko Bio Richard</a></h5></center> 
    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
