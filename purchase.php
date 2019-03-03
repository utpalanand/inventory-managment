<?php
include("connect.php");
if(isset($_POST['submit']))
{
$purchase_ID=$_POST['purchase_id'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$manufacturer=$_POST['manufacturer'];
$price=$_POST['price'];
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

$query="INSERT INTO `purchasing`( `Quantity`, `Date`, `Manufactuer`, `Prices`) VALUES ('$quantity','$date','$manufacturer','$price')";
$purchase=mysqli_query($conn,$query) or die(mysqli_error($conn));
if($purchase)
{
    echo "connected";
    header("location:purchase.php");
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
    <body >
      <div class="container-fluid">
      <div class="row">
       <div class="col-sm-6">
        <form action="" method="post">
          <div class="form-group row">
           <label class="col-sm-2 col-form-label">purchase_ID</label>
            <input type="text" name="purchase_id" value="" placeholder="Purchase Id" class="col-sm-7 form-control"/>
            </div>
            
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">
             quantity</label>
             <input type="text" name="quantity" value="" placeholder="Quantity" class="col-sm-7 form-control"/></div>
             <div class="form-group row">
             <label class="col-sm-2 col-form-label">
              date</label>
              <input type="date" name="date" value="" class="col-sm-7 form-control"/>
            </div>
              <div class="form-group row">
              <label class="col-sm-2 col-form-label">
               manufacturer
               </label><input type="text" name="manufacturer" value="" placeholder="Manufacturer" class="col-sm-7 form-control"/></div>
               <div class="form-group row">
               <label class="col-sm-2 col-form-label">
                price</label>
                <input type="text" name="price" value="" placeholder="Price" class="col-sm-7 form-control"/>
            </div> 
                <input type="submit" name="submit" class="btn btn-success" class="md"/>
        </form>
        </div>
        <table style="width:100%">
      <div class="col-sm-6">  
      
    <?php
        
     $query1="SELECT * FROM `purchasing`";   //displaying in the table 
    $data=mysqli_query($conn , $query1);
    $total=mysqli_num_rows($data);       
    if($total !=0)
    { ?> 
    <table class="table">   
  <tr>

       <th>purchase_id</th>
       <th>Quantity</th>
       <th>Date</th>
       <th>Manufactuer</th>
       <th>Prices</th>
       <th>Operations</th>
       
        <?php
        while($result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
            <td>".$result['purchase_id']."</td>
            <td>".$result['Quantity']."</td>
            <td>".$result['Date']."</td>
            <td>".$result['Manufactuer']."</td>
            <td>".$result['Prices']."</td>
            <td>
            <a href='purchaseupdate.php?pid=$result[purchase_id]&qu=$result[Quantity]&date=$result[Date]&manu=$result[Manufactuer]&price=$result[Prices]'>edit</a>
           
            
               <a href='purchasedelete.php?pid=$result[purchase_id]' >delete</a>
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
  
</div>
  </div>
  </div>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>