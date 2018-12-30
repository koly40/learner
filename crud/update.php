<?php 
	 $id = $_GET['id'];
	 $department = $_POST['department']; 
	 $seat = $_POST['seat']; 
	 $total_cost = $_POST['total_cost']; 
	 $duration = $_POST['duration']; 
	 
	 
		$conn = mysqli_connect('localhost','root','','adm_pro');
		$sql = "UPDATE social_science_faculty SET department = '$department',seat = '$seat' total = '$total_cost',duration = '$duration' WHERE id = $id";
		
		if(mysqli_query($conn,$sql)){
			header("Location:show.php?id=" . $id);
		}else{
			echo "not updated";
		}
?>