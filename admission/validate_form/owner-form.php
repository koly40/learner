<?php

	$name = $_POST['un'];
	$pass = $_POST['em'];
	$email = $_POST['ps'];
	$Contact = $_POST['ct'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into owner_table set name ='$name',password ='$pass',email ='$email' ,Contact ='$Contact'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>