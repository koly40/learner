<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$M_num = $_POST['Mnum'];
	$gender = $_POST['sex'];

	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into students set fName ='$fname',lname ='$lname',email ='$email',password ='$pass',mobile_number = '$M_num',gender = '$gender'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>