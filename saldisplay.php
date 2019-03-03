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

$sql = "SELECT Oder_Id, P_Id, C_Id, Date, Quantity FROM sales";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Oder_Id</th><th>P_Id</th><th>C_Id</th><th>Date</th><th>Quantity</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Oder_Id"]. "</td><td><a href='show_details.php?pid=".$row["P_Id"]."'>". $row["P_Id"]. "</a></td><td> " . $row["C_Id"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Quantity"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>