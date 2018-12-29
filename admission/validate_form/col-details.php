<?php

	$program = $_POST['program'];
	$Section = $_POST['section'];
	$Subject = $_POST['subject'];
	$shift = $_POST['shift'];
	$eligibility = $_POST['eligibi'];
	$seat = $_POST['se'];
	$duration = $_POST['dur'];
	$Admission_cost = $_POST['cost'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into col_details set program ='$program',section ='$Section',subject 
	='$Subject' ,shift ='$shift',eligibility = 
	'$eligibility',seat = '$seat',	duration = '$duration',admission_cost='$Admission_cost'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>