<?php
//$uname='';
//$password='';
//if(isset( $_POST['uname']))
//{

//}
/*if(isset( $_POST['password']))
{*/

//}
$error="";
$success="";

if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['pass'];
if($uname=="inventory@123"){
if($password=="utpal@123"){
$error="";
$success="welcome to inventory";
    header("location:homepage.html");
 }
 else{
      $error="invalid password";
    $success="";
 }
}
else{
   $error="invalid username";
    $success="";
    }
}
?>
<html>
<head>
<title>transparent log in form design</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<!--<ul>
    <li><a>inventory</a>
     <ul>
    <li><a>setup</a></li>
     
    <li><a>godown</a></li>
    <li><a>product unit</a></li>
         <li><a>product type</a></li>
         
     </ul>
     </li>
 </ul> 
 <ul>
    <li><a>About</a>
     <ul>
    <li><a>About Us</a></li>
     
    <li><a>Contact details</a></li>
   
     </ul>
     </li>
 </ul>
 
 <ul>
    <li><a>Report</a>
     <ul>
    <li><a>in stock</a></li>
    <li><a>out of stock</a></li>
     </ul>
     </li>
 </ul>
 
 <ul>
    <li><a>Utility</a>
     <ul>
    <li><a>restore data</a></li>
     
    <li><a>backup data</a></li>
    <li><a>user</a></li>
     </ul>
     </li>
 </ul>
 
 <ul>
    <li><a>Exit</a>
     <ul>
    <li><a>delete data</a></li>
     
    <li><a>exit without delete</a></li>
     </ul>
     </li>
 </ul>-->
 
 
<div class="login-box">
<img src="log.jpg" alt="here is utpal anand" class="log">
<h1>login here</h1>
    <p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
<form method="post">
    <p>username</p>
    <input type="text" name="uname" placeholder="enter username">
    <p>password</p>
    <input type="password" name="pass" placeholder="enter password">
    <input type="submit" name ="submit" value="login">
    <!--<a href="reset.php">forgot password</a>-->
</form>
</div>
</body>

</html>