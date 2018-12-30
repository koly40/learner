<?php
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','adm_pro');
	$sql = "DELETE FROM social_science_faculty WHERE id = $id";
	if(mysqli_query($conn,$sql)){
		header("Location:social_science_faculty.php");
	}else{
		echo "no deleted";
	}
?>