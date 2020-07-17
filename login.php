
<?php
try {
    require('mysqli_connect.php');
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT email , password FROM users  WHERE email = '".$email ."'" ;
    $result = $conn->query($query);
  
    $count = $result->num_rows;
    
    $row = $result->fetch_array(MYSQLI_NUM);

    if ($count == 1) 
    {
        
        if (password_verify($password , $row[1])) 
        {
            session_start();
            $_SESSION['users'] = $email;
            // header("location : admin-page.php");
            header("Location: loggedin.php");  
            exit();
        }

        else
        { // if it did not run OK.
            echo "login not OK!";
            exit();
        }
       
    }
    else
    {
            echo "deo co email dang nhap cdg???";
        }

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// close statement and connection
$stmt->close();
$conn->close();
?>
