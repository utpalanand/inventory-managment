<?php
include('connect.php');
if(isset($_POST['submit']))
{
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];

$price=$_POST['price'];
$expierydate=$_POST['expierydate'];
// sql to create table

/*$sql = "CREATE TABLE purchasing (
purchase_id INT(3) AUTO_INCREMENT PRIMARY KEY, 
Quantity VARCHAR(30) NOT NULL , 
Date DATE ,
Manufactuer VARCHAR(30) NOT NULL ,
Prices VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Raw Material created successfully";
} else {
    echo "\nError creating table: " . $conn->error;
}*/

$query="INSERT INTO `product`(`product_name`, `Quantity`, `date`, `price`, `expierydate`)VALUES('$product_name',$quantity','$date','$price','$expierydate')";
$product=mysqli_query($conn,$query) or die(mysqli_error($conn));
if($product)
{
    echo "connected";
    header("location:product.php");
}

$conn->close();
}
?>
<html>
    <head>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
        table, th, td {
    border: 1px solid black;
}
        </style>
    </head>
    <body class="container">
        <form action="" method="post">
            product_Id<input type="text" name="product_id" value="" placeholder="Product Id"/><br>
            productname<input type="text" name="product_name" value="" placeholder="Prodct name"/><br>
             quantity<input type="text" name="quantity" value="" placeholder="Quantity"/><br>
              date<input type="date" name="date" value="" /><br>

                price<input type="text" name="price" value="" placeholder="Price"/><br>
                expierydate<input type="date" name="expierydate" value="" /><br>
                <input type="submit" name="submit" class="btn btn-success"/>
        </form>
        <table style="width:100%">
        
    <?php
        
     $query1="SELECT * FROM `product`";   //displaying in the table 
    $data=mysqli_query($conn , $query1);
    $total=mysqli_num_rows($data);       
    if($total !=0)
    { ?> 
    
    <table>   
  <tr>
      
        
        
        
        
        

        <?php
        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['product_id']."</td>
            <td>".$result['product_name']."</td>
            <td>".$result['Quantity']."</td>
            <td>".$result['date']."</td>
            <td>".$result['price']."</td>
            <td>".$result['expierydate']."</td>
            <td>
            <a href='productupdate.php?pid=$result[product_id]&pname=$result[product_name]&qu=$result[Quantity]&date=$result[date]&price=$result[price]&expierydate=$result[expierydate]'>edit</a>
            </td>
              <td>
               <a href='productdelete.php?pid=$result[product_id]' >delete</a>
            </td>
            ";
         
         
        }
 }
else
{
echo "no reslut found";
} 

?>
  
</table>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>