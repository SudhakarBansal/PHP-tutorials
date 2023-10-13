<?php
echo "hello how are you...<br>";
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Sorry! Connection cannot be established : " . mysqli_connect_error());
}
echo "Connection Build Successfully";
?>