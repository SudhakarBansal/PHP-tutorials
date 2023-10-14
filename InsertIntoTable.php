<?php
echo "Creating a  table in php<br>";

//connecting to database....
$servername = "localhost";
$username = "root";
$password = "";
$database = "Sudhakar";
$conn = mysqli_connect($servername, $username, $password, $database);

//Checking Connection
if (!$conn) {
    die("Sorry! Connection cannot be established : " . mysqli_connect_error());
}
echo "Connection Build Successfully<br>";



//Sql Query to insert Data
$Fname = "Sudhakar";
$lname = "Bansal";
$age = 21;
$sql = "INSERT INTO Persons (FirstName,LastName,Age) VALUES ('$Fname','$lname','$age')";
$result = mysqli_query($conn, $sql);


//Checking successfull insertion
if ($result) {
    echo "Record inserted Successfully";
} else {
    echo "Record not inserted. Error : " . mysqli_error($conn);
}

?>