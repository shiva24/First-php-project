<?php 
	include 'JobDB.php';
	$isUser = confirmUser($_GET['name'], $_GET['password']);
	if($isUser==1){
//		echo "success";
		session_start();
		$_SESSION['name'] = $_GET['name'];
		echo "<META http-equiv='refresh' content='0;URL=joblist.php'>";
	}
	else{
		echo "<META http-equiv='refresh' content='0;URL=Login.php'>";
	}
?>