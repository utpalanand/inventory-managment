<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message']="logout";
	header("location: logi.php");
?>