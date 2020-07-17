

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Category</title>
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
    require('category.php');
  } // end of the main Submit conditional
  ?>
  <h2 class="h2 text-center">
  Category</h2>
    <form action="category.php" method="post" onsubmit="return checked();" name="regform" id="regform" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="category_name" class="col-sm-4 col-form-label">Category Name </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="category_name" name="category_name" 
          placeholder=" category_name" maxlength="60" required value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="category_image" class="col-sm-4 col-form-label">category_image</label>
        <div class="col-sm-8">
          <input type="file" name="category_image" id="category_image">
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