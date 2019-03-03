<?php
include('db.php');
$user = $_POST['user'];
$password =$_POST['password'];
$user = stripcslashes($user);
$password = stripcslashes($password);
/*$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);*/
$sq="select * from user where user ='$user' and password='$password'";
$result = mysqli_query($conn,$sq);
if(mysqli_num_rows($result)==1){
echo "welcome to homepage ".$_POST['username'];
header("location:homepage.html");}
else{
echo "invailid user and password";
 header("refresh:2; url=loginpage.php");
 }

?>