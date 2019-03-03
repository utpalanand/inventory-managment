<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "\nConnected successfully";
// sql to create table
$sql = "CREATE TABLE Product (
P_Id INT(3) AUTO_INCREMENT PRIMARY KEY, 
P_Name VARCHAR(30) NOT NULL , 
M_Date DATE ,
Prices VARCHAR(30) NOT NULL ,
ExpDate DATE ,
Quantity VARCHAR(30) NOT NULL 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Product created successfully";
} else {
    echo "\nError creating table: " . $conn->error;
}
$conn->close();
?>