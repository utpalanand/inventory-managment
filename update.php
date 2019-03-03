<?php
$conn = mysqli_connect('localhost','root','');
 if(!$conn)
 {
	 echo 'Not connected';
 }
 if(!mysqli_select_db($conn,'pdb'))
 {
	 echo 'data not selected';
 }
echo $_GET['P_Id'];
echo $_GET['P_Name'];
echo $_GET['M_Date'];
echo $_GET['Quanatity'];
echo $_GET['ExpDate'];
echo $_GET['Prices'];
?>

