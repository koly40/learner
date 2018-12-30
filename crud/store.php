<?php
	$department = $_POST['department'];
	$seat = $_POST['seat'];
	$total_cost = $_POST['total_cost'];
	$duration = $_POST['duration'];
	
	$conn = mysqli_connect('localhost','root','','adm_pro');
	$sql = "INSERT INTO social_science_faculty set department ='$department',seat ='$seat',total_cost ='$total_cost',duration = '$duration'";
	if(mysqli_query($conn,$sql)){
		header("Location:Social_Science_Faculty.php");
	}else{
		echo "not inserted";
	}
?>