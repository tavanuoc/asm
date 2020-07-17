<?php
session_start();
$email = $_SESSION["users"];
if ( ($email == "") || ($email == null) ) {
    // header ("Location :login_form.php");
    echo"vui long đăng nhập";
    echo "<br>";
    echo '<a href="login_form.php"> Login</a>';
    exit();
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Addproduct</title>
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
    require('product.php');
  } // end of the main Submit conditional
  ?>
  <h2 class="h2 text-center">
  Addproduct</h2>
    <form action="product.php" method="post" onsubmit="return checked();" name="regform" id="regform" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="product_name" class="col-sm-4 col-form-label">Product Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="product_name" name="product_name" 
          placeholder="product_name" maxlength="30" required value="" >
        </div>
      </div>

      <div class="form-group row">
        <label for="product_description" class="col-sm-4 col-form-label">Product Description</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="product_description" name="product_description" 
          placeholder=" product_description" maxlength="60" required value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="product_price" class="col-sm-4 col-form-label">Product Price</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="product_price" name="product_price" 
          placeholder="product_price" maxlength="60" required value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="product_image" class="col-sm-4 col-form-label">Product Image</label>
        <div class="col-sm-8">
          <input type="file" name="product_image" id="product_image">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-12">
          <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Addproduct">
        </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>