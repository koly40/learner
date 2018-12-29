<?php 
	 $id = $_GET['id'];
	 $name = $_POST['name']; 
	 $title = $_POST['title']; 
	 $sd = $_POST['start_date']; 
	 $ed = $_POST['end_date']; 
	 $img = $_POST['image']; 
	 
	 
		$conn = mysqli_connect('localhost','root','','adm_pro');
		$sql = "UPDATE advertisement SET name = '$name',title = '$title' start_date = '$sd',end_date = '$ed' image = '$img' WHERE id = $id";
		
		if(mysqli_query($conn,$sql)){
			header("Location:show_fair.php?id=" . $id);
		}else{
			echo "not updated";
		}
?>