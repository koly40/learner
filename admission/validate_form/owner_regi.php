<?php

	$name = $_POST['username'];
	$pass = $_POST['password'];
	$re_pass = $_POST['retype_password'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile_number'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into owner_registraion set username ='$name',password ='$pass',email ='$email' ,mobile_num ='$mobile'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>