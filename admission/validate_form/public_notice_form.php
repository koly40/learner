<?php

	$title = $_POST['title'];
	$adm_type = $_POST['Admn_type'];
	$uni_type = $_POST['Uniid'];
	$stat_time = $_POST['S_date'];
	$end_time = $_POST['E_date'];
	$cost = $_POST['cost'];
	$notice_link = $_POST['notice_link'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into admission_notice set 	title ='$title',university_type ='$uni_type',admission_type ='$adm_type' ,start_date ='$stat_time',end_date='$end_time',form_cost='$cost',notice_link='$notice_link'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>