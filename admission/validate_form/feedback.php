<?php

	$name = $_POST['username'];
	$email = $_POST['email'];
	$review = $_POST['revi'];
	$experience = $_POST['checkbox'];
	$response = $_POST['checkbox'];
	$support = $_POST['checkbox'];
	$overall = $_POST['checkbox'];
	
	$mysqli = new mysqli("localhost","root","","adm_pro");
	$result = $mysqli->query("Insert into feedback set Name ='$name',Email ='$email',Review ='$review',Experience = '$experience',Response = '$response',Support = '$support',Satisfaction = '$overall'");
	
	
	if(!$result){
		echo "insertion error";
	}
	else{
		echo "data is inserted";
	}
?>