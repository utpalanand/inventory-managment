<?php
$conn = mysqli_connect('localhost','root','','logo');
 if($conn)
 echo '';
 else
 die("failed to connect with database".mysqli_error($conn));
 
 ?>