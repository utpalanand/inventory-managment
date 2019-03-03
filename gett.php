<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "get";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "\nConnected successfully";
// sql to create table
$sql = "CREATE TABLE user (
id INT(3) AUTO_INCREMENT PRIMARY KEY, 
user VARCHAR(30) NOT NULL , 
password VARCHAR(30) NOT NULL 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table gett created successfully";
} else {
    echo "\nError creating table: " . $conn->error;
}
$conn->close();
?>