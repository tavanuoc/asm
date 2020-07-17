<?php
try {
    require('mysqli_connect.php');
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    // get form inputs
    $userName = $_POST['userName'];	
    $userPhone = $_POST['userPhone'];	
    $email = $_POST['email'];	
    $password = $_POST['password'];
    $hashed_passcode = password_hash($password, PASSWORD_DEFAULT);
    // Make and prepare the query

        

    $query = "INSERT INTO users( userName , userPhone, email, password) VALUES(?, ?, ?, ?)";
    
    // $query .= "VALUES(?, ?, ?, ?, NOW())";			                
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $userName, $userPhone, $email, $hashed_passcode);
    
    // run and check the query's result
    if ($stmt->execute()) {	
        header("Location: ./index.php");  
        exit();
    } 
    else
     { // if it did not run OK.
        echo "Insert not OK!";
        exit();
    }
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
// close statement and connection
$stmt->close();
$conn->close();
?>
