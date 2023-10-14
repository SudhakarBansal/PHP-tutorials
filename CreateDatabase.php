<?php
echo "Creating a Database in php<br>";
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Sorry! Connection cannot be established : " . mysqli_connect_error());
}
echo "Connection Build Successfully<br>";

$sql = "CREATE DATABASE Sudhakar";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "database build Successfully";
} else {
    echo "Db not created. Error : " . mysqli_error($conn);
}

?>