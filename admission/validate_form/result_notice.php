<?php

	$Title = $_POST['title'];
	$Admission_type = $_POST['Admission_type'];
	$University = $_POST['University'];
	$Res_P_n = $_POST['S_date'];
	$Ending = $_POST['E_date'];
	$Notice_l = $_POST['notice_link'];
	
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into res_notice set Title ='$Title',Admission_type ='$Admission_type',Uni_id ='$University',Result_publish_date ='$Res_P_n',Notice_link ='$Notice_l',Expire = '$Ending'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>