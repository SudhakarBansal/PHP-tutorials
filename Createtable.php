<?php
echo "Creating a  table ib php<br>";
$servername = "localhost";
$username = "root";
$password = "";
$database = "Sudhakar";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry! Connection cannot be established : " . mysqli_connect_error());
}
echo "Connection Build Successfully<br>";

$sql = "CREATE TABLE Persons (
    Personid int NOT NULL AUTO_INCREMENT,FirstName varchar(10) NOT NULL,LastName varchar(10),Age int,PRIMARY KEY (Personid))";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Table build Successfully";
} else {
    echo "Table not created. Error : " . mysqli_error($conn);
}

?>