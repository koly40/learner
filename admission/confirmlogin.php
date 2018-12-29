<?php

include "database.php";
 $email = $_POST['email'];
 $pass = $_POST['password'];

 $sql = "SELECT *FROM users WHERE email='$email' AND password='$pass'";
 $result =$db->query($sql);
	
	$rowcount = mysqli_num_rows($result);
	
	if($rowcount == 1){
		session_start();
		$_SESSION['login'] = true;
		header("location:admin_panel.php");
	}else{
		echo "wrong email and password";
	}
?>