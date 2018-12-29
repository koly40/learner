<?php

	$name = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$comment = $_POST['message'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into contact set name ='$name',password ='$pass',email ='$email' ,comment ='$comment'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>