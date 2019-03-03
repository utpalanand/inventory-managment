<?php
include('connect.php');
$pid=$_GET['pid'];
//$p=$_POST['purchase_id'];
/* $query1= "SELECT *  FROM `purchasing` WHERE `purchase_id` =$p ";   //displaying in the table 
    $data=mysqli_query($conn , $query1);
    $total=mysqli_num_rows($data);*/ 

$qu=$_GET['qu'];
$manufacturer_name=$_GET['manufacturer_name'];
$name=$_GET['pname'];
$price=$_GET['price'];
$expierydate=$_GET['expierydate'];

if(isset($_POST['submit'])){
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$quantity=$_POST['Quantity'];
$manufacturer_name=$_POST['manufacturer_name'];
$Price=$_POST['price'];
$expieryDate=$_POST['expieryDate'];

$query2="UPDATE saledetails SET quantity='$quantity',manufacturer_name='$manufacturer_name',product_name='$name',price='$price',expierydate='$expierydate' WHERE product_id='$product_id'";
$product1=mysqli_query($conn,$query2) or
    die(mysqli_error($conn));
if($product1)
{
    echo "record updated";
    header('Location: sale.php');
}else{
    echo "Record not updated";
}
    

}

  ?>

    
    <html><head>
        <style>
        table, th, td {
    border: 1px solid black;
}
        </style>
    </head>
    <body>
        <form action="" method="POST">
            product_ID<input type="text" name="product_id" value="<?= $pid ?>" placeholder="Product_id"/><br>
             product_name<input type="text" name="product_name" value="<?= $name ?>" placeholder="Product_name"/><br>
             quantity<input type="text" name="Quantity" value="<?= $qu ?>" placeholder="Quantity"/><br>
              manufacturer_name<input type="manufacturer_name" name="manufacturer_name" value="<?= $manufacturer_name?>" /><br>
               
                price<input type="text" name="price" value="<?= $price ?>" placeholder="price"/><br>
                expierydate<input type="expieryDate" name="expierydate" value="<?= $expierydate ?>" /><br>
                <input type="submit" name="submit" value="Update"/>
        </form>
        <table style="width:100%">
        </table>
        </body>
</html>