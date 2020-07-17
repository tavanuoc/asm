<?php
try {
    require('mysqli_connect.php');
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // get form inputs
    $category_name = $_POST['category_name'];
    // echo $product_name;
    $category_image = $_POST['category_image'];



    if (isset($_POST['submit'])) {
        $errors = array();
        $file_name = $_FILES['category_image']['name'];
        $file_size = $_FILES['category_image']['size'];
        $file_tmp = $_FILES['category_image']['tmp_name'];
        $file_type = $_FILES['category_image']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['category_image']['name'])));
   
        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Kích thước file không được lớn hơn 2MB';
        }
        $image .= "category/" . $_FILES['category_image']['name'];
        $target = "category/" . basename($image);
        // $sql = "INSERT INTO customers (category_image) VALUES ('$image')";
        // mysqli_query($conn, $sql);
        if (move_uploaded_file($_FILES['category_image']['tmp_name'], $target)) {
            // echo '<script language="javascript">alert("Đã upload lên sv thành công!");</script>';
            // Make and prepare the query  
            $query = "INSERT INTO category  (category_name, category_image) VALUES (?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss",  $category_name, $file_name  );
            // echo $query;
            // run and check the query's result

            if ($stmt->execute()) {    // one record inserted			
                echo '<script language="javascript">alert("Add product successfull!");</script>';
                echo '<a href="index.php">Home Page</a> | <a href = "category_form.php">Continue</a>';
                // echo "Insert OK!";

                exit();
            } else { // if it did not run OK.
                echo '<script language="javascript">alert("cannot add product!");</script>';
                echo '<a href="index.php">Home Page</a> | <a href = "category_form.php">Try Again</a>';
                exit();
            }
        } else {
            echo '<script language="javascript">alert(" tải lên thất bại!");</script>';
        }
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// close statement and connection
$stmt->close();
$conn->close();
