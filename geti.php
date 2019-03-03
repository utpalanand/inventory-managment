<?php
$conn = mysqli_connect('localhost','root','');
 if(!$conn)
 {
	 echo 'Not connected';
 }
 if(!mysqli_select_db($conn,'get'))
 {
	 echo 'data not selected';
 }
  $id='';
 $user='';
 $password='';
 if(isset( $_POST['user']))
 {
 $user  = $_POST['user'];}
 if(isset( $_POST['password']))
 {
 $password = $_POST['password'];}
 $sql = "INSERT INTO user ( id, user, password) VALUES ('$id', '$user', '$password')";
 if(!mysqli_query($conn,$sql))
 {
	echo "NOt saved";
  }
  else
  {
	echo 'saved';
  }
 header("refresh:2; url=logi.php");
?>
