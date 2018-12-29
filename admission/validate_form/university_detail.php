<?php

	$uni_id = $_POST['unit'];
	$uni_n = $_POST['un'];
	$fc  = $_POST['fc'];
	$Depart = $_POST['depart'];
	$Seats = $_POST['se'];
	$total_semester = $_POST['semister'];
	$eligibility = $_POST['eligibi'];
	$div = $_POST['div'];
	$duration = $_POST['dur'];
	$Admission_cost = $_POST['cost'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into uni_details set 
	
	Uni_id ='$uni_id',
	university_name = '$uni_n',
	feaculty = '$fc',
	Department ='$Depart',
	seat = '$Seats',
	total_semester ='$total_semester',
	eligibility ='$eligibility', 
	Duration = '$duration',
	Academic _cost ='$Admission_cost',
	division = '$div'");
	
	
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>