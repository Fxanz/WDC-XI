
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>WDC 14 Agustus</title>
    </head>
<body>
  <div class="container">
  <form style="max-width:380px; margin:auto;" action="proses-login.php" method="post">
   <div class="form">
    <h3 class="login">Log in</h3>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="button">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <form action="menu.php">
            <div class="forgot">
              <p><a href="forgot.php"> Forgot Password?</a></p>
            </div>
          </form>
          <div class="akun">
              <p>Don't have an account? <span><a href="register.php"> Register here</a></span></p>
          </div>
    </form>
    </div>
  </div>
</body>
</html>
