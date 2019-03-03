<?php
include('connect.php');
$pid=$_GET['pid'];
//$p=$_POST['purchase_id'];
/* $query1= "SELECT *  FROM `purchasing` WHERE `purchase_id` =$p ";   //displaying in the table 
    $data=mysqli_query($conn , $query1);
    $total=mysqli_num_rows($data);*/ 
$query3="DELETE FROM product WHERE product_id='$pid'";
$product2=mysqli_query($conn,$query3) or
    die(mysqli_error($conn));
if($product2)
{
    echo "Record Successfully Deleted";
    header('Location: product.php');
}else{
    echo "Record not deleted";
}
?>