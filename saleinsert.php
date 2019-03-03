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
 $Oder_Id="";
 $P_Id="P_Id";
 $C_Id="C_Id";
 $Date="";
 $Quantity="";
 if(isset( $_POST['Oder_Id']))
 {
 $Oder_Id  = $_POST['Oder_Id'];}
 if(isset( $_POST['P_Id']))
{
 $P_Id  = $_POST['P_Id'];}
 if(isset( $_POST['C_Id']))
 {
 $C_Id  = $_POST['C_Id'];}
 if(isset( $_POST['Date']))
 {
 $Date = $_POST['Date'];}
 if(isset( $_POST['Quantity']))
 {
 $Quantity = $_POST['Quantity'];}
 
 /*$qry="SELECT * FROM product WHERE P_Id=$P_Id";
 $qry="SELECT * FROM customer WHERE C_Id=$C_Id";
 $result = mysqli_query($conn,$qry);
 if(mysqli_query($conn,$result)) */
"SELECT * FROM product WHERE $P_Id=P_Id";
"SELECT * FROM customer WHERE $C_Id=C_Id";
 $sql="INSERT INTO sales (Oder_Id, P_Id, C_Id, Date, Quantity) VALUES ('$Oder_Id', '$P_Id', '$C_Id', '$Date', '$Quantity')";
 /*FOREIGN KEY (`P_Id`) REFERENCES `product` (`P_Id`) ON DELETE SET NULL ON UPDATE CASCADE
  FOREIGN KEY (`C_Id`) REFERENCES `customer` (`C_Id`) ON DELETE SET NULL ON UPDATE CASCADE 
  $sql="SELECT P_Id FROM product";
 + — — +
 | P_Id|
 + — — +
 | 1   |
 | 2   |
 | 3   |
 + — — +
 3 rows in set (0.00 sec)
 $sql="SELECT C_Id FROM customer";
 + — — +
 | C_Id|
 + — — +
 | 1   |
 | 2   |
 | 3   |
 + — — +
 3 rows in set (0.00 sec)*/
 if(!mysqli_query($conn,$sql))
 {
	echo "NOt inserted";
  }
  else
  {
	echo 'inserted';
  }
 //header("refresh:2; url=sale.html");
/*}else{
    echo "Team is not valid!!!";
} */
?>