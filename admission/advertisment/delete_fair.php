<?php
	$id = $_GET['id'];
	$conn = new mysqli('localhost','root','','adm_pro');
	$sql = "DELETE FROM advertisement WHERE id = $id";
	if(mysqli_query($conn,$sql)){
		header("Location:admission_fair.php");
	}else{
		echo "no deleted";
	}
?>