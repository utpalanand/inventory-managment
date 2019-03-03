<?php
$uname='';
if(isset( $_POST['uname']))
{
$uname=$_POST['uname'];}
$error="";
$success="";

if(isset($_POST['submit'])){
if($uname=='prak5682@gmail.com'){
$error="";
$success="welcome to inventory";
    header("location:get.html");
 }
else{
   $error="email doesn't exist in database";
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
  
  
<div class="login-box">
<img src="log.jpg" alt="inventory" class="log">
<h1>reset password</h1>
    <p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
<form method="post">
    <p>Email</p>
    <input type="text" name="uname" placeholder="enter email">
    <input type="submit" name ="submit" value="email">
</form>
</div>
</body>

</html>