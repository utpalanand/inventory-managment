<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$pid="";
 if(isset( $_POST['pid']))
 {
 $pid  = $_POST['pid'];}
 
// sql to delete a record
$sql = "DELETE FROM product WHERE P_Id=pid ";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
 header("refresh:2; url=pdelete.html");
//mysqli_close($conn);
?>