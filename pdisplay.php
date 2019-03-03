<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

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

$sql = "SELECT P_Id, P_Name, M_Date, Prices, ExpDate, Quantity FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>P_Id</th><th>P_Name</th><th>M_Date</th><th>Prices</th><th>ExpDate</th><th>Quantity</th><th>stock(in/out)</th><th>Action</th></tr>";
	if($Quantity->stock > 0) {
    echo 'in: ' . $Quantity->stock;
} else {
    echo 'Out';
}
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["P_Id"]. "</td><td>" . $row["P_Name"]. "</td><td> " . $row["M_Date"]. "</td><td>" . $row["Prices"]. "</td><td>" . $row["ExpDate"]. "</td><td>" . $row["Quantity"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>