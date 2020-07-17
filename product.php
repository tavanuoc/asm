<?php
try {
    require('mysqli_connect.php');
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // get form inputs
    $product_name = $_POST['product_name'];
    // echo $product_name;
    $product_image = $_POST['product_image'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];


    if (isset($_POST['submit'])) {
        $errors = array();
        $file_name = $_FILES['product_image']['name'];
        $file_size = $_FILES['product_image']['size'];
        $file_tmp = $_FILES['product_image']['tmp_name'];
        $file_type = $_FILES['product_image']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['product_image']['name'])));

        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Kích thước file không được lớn hơn 2MB';
        }
        $image .= "images/" . $_FILES['product_image']['name'];
        $target = "images/" . basename($image);
        // $sql = "INSERT INTO customers (product_image) VALUES ('$image')";
        // mysqli_query($conn, $sql);
        if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target)) {
            // echo '<script language="javascript">alert("Đã upload lên sv thành công!");</script>';
            // Make and prepare the query  
            $query = "INSERT INTO products (product_name, product_description, product_price, product_image) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssis",  $product_name, $product_description,  $product_price, $file_name);
            // run and check the query's result

            if ($stmt->execute()) {    // one record inserted			
                echo '<script language="javascript">alert("Add product successfull!");</script>';
                echo '<a href="index.php">Home Page</a> | <a href = "addproduct.php">Continue</a>';
                // echo "Insert OK!";

                exit();
            } else { // if it did not run OK.
                echo '<script language="javascript">alert("cannot add product!");</script>';
                echo '<a href="index.php">Home Page</a> | <a href = "addproduct.php">Try Again</a>';
                exit();
            }
        } else {
            echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
        }
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// close statement and connection
$stmt->close();
$conn->close();
