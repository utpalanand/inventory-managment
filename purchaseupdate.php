<?php
include('connect.php');
$pid=$_GET['pid'];
//$p=$_POST['purchase_id'];
/* $query1= "SELECT *  FROM `purchasing` WHERE `purchase_id` =$p ";   //displaying in the table 
    $data=mysqli_query($conn , $query1);
    $total=mysqli_num_rows($data);*/ 

$qu=$_GET['qu'];
$date=$_GET['date'];
$manu=$_GET['manu'];
$price=$_GET['price'];

if(isset($_POST['submit'])){
$purchase_id=$_POST['purchase_id'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$manufacturer=$_POST['manufacturer'];
$Price=$_POST['prices'];

$query2="UPDATE purchasing SET Quantity='$quantity',Date='$date',Manufactuer='$manufacturer',Prices='$Price' WHERE purchase_id='$purchase_id'";
$purchase1=mysqli_query($conn,$query2) or
    die(mysqli_error($conn));
if($purchase1)
{
    echo "record updated";
    header('Location: purchase.php');
}else{
    echo "Record not updated";
}
    

}

  ?>

    
    <html><head>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
        table, th, td {
    border: 1px solid black;
}
        </style>
    </head>
    <body class="container-fluid">
        <form action="" method="POST">
            <div class="form-group row">
           <label class="col-sm-2 col-form-label">purchase_ID</label>
            <input  type="text" name="purchase_id" value="<?= $pid ?>" placeholder="Purchase_id" class="col-sm-7 form-control"/>
            </div>
            
             <div class="form-group row">
           <label class="col-sm-2 col-form-label">quantity</label>
            <input  type="text" name="quantity" value="<?= $qu ?>" placeholder="Quantity" class="col-sm-7 form-control"/>
            </div>
           
             <div class="form-group row">
           <label class="col-sm-2 col-form-label">date</label>
            <input  type="date" name="date" value="<?= $date ?>"  class="col-sm-7 form-control"/>
            </div>
              
              <div class="form-group row">
           <label class="col-sm-2 col-form-label">manufacturer</label>
            <input type="text" name="manufacturer" value="<?= $manu ?>" placeholder="Manufacture"  class="col-sm-7 form-control"/>
            </div>
    
                <div class="form-group row">
           <label class="col-sm-2 col-form-label">price</label>
            <input type="text" name="prices" value="<?= $price ?>" placeholder="Price" class="col-sm-7 form-control"/>
            </div>
                
                <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
        </form>
        <table style="width:100%">
        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
</html>