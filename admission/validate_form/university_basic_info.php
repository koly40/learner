<?php

	$Uni_Name = $_POST['u_name'];
	$Uni_type = $_POST['u_type'];
	$VC = $_POST['vc'];
	$Location = $_POST['local'];
	$District = $_POST['dist'];
	$Est_time = $_POST['E_date'];
	$T_s = $_POST['T_seat'];
	$T_Depart = $_POST['T_Depart'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into uni_basic set 
	
	Uni_name ='$Uni_Name',
	Type ='$Uni_type',
	VC_Name= '$VC',
	Location ='$Location',
	Division='$District',
	Establistment_date = '$Est_time',
	total_seat = '$T_s',
	total_depart='$T_Depart'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>