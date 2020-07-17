


<?php
session_start();
if (isset($_SESSION["users"])) {
    echo "welcome: ".$_SESSION["users"];
}
?>
<br>
<a href="addproduct.php">addproduct</a> | <a href="index.php">home</a>