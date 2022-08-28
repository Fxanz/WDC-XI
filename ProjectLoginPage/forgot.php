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
      <form  style="max-width:380px;margin:auto;">

      <h3 class="login">Change Password</h3>
            <div class="input-group mb-3">
                  <input type="Password" placeholder="Enter your new Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                  <input type="password" placeholder="Confirm your new password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="button">
            <a href="index.php" class="btn btn-user btn-block "onclick="return confirm('Password berhasil diubah');">Change</a>
            </div>
            <div class="akun">
                  <p>Don't want to change password? <span><a href="index.php">back to login</a></span></p>
            </div>
      </form>
      </div>
</body>
</html>
