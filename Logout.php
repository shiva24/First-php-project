<?php 
	session_start();
	unset($_SESSION['name']);
	session_destroy();
	header("location:Login.php?name=".$_SESSION['name']);
?>