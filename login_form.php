<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {                              
    require('login.php');
  } // end of the main Submit conditional
  ?>
  <h2 class="h2 text-center">Login</h2>
    <form action="login.php" method="post" onsubmit="return checked();" name="regform" id="regform" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email" 
          placeholder="Your email" maxlength="60" required value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-4 col-form-label">PassWord</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="password" name="password" 
          placeholder="password" maxlength="60" required value="">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
          <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Login">
        </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>