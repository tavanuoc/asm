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
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                //#1
    require('register.php');
  } // end of the main Submit conditional
  ?>
  <h2 class="h2 text-center">Register Page</h2>
    <form action="register.php" method="post" onsubmit="return checked();" name="regform" id="regform" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="userName" class="col-sm-4 col-form-label">Full Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="userName" name="userName" 
          placeholder="userName" maxlength="30" required value="" >
        </div>
      </div>
      <div class="form-group row">
        <label for="userPhone" class="col-sm-4 col-form-label">Phone</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="userPhone" name="userPhone" 
          placeholder="userPhone" maxlength="40" required value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="email" name="email" 
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
        <label for="password" class="col-sm-4 col-form-label">Confirm PassWord</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="Confirm PassWord " name="Confirm PassWord " 
          placeholder="confirm password " maxlength="60" required value="">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
          <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
        </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>