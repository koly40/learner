<?php
	 $id = $_GET['id'];
	$conn = new mysqli('localhost','root','','adm_pro');
	$sql = "SELECT * FROM advertisement WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	$add = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  
  
    <div class="container">
		<div class="row">
			<div class="col-md-3">
				<a class="btn-btn-info" href="admission_fair.php">Fair list</a>
			</div>
			<div class="col-md-9">
			<h2 class="text-center">Add detail</h2>
				<table class="table">
					<tr>
						<th class="text-left">ID</th>
						<td><?php echo $add['id'];?></td>
					</tr>
					<tr>
						<th class="text-left">Add Name</th>
						<td><?php echo $add['name'];?></td>
					</tr>
					<tr>
						<th class="text-left">Add title</th>
						<td><?php echo $add['title'];?></td>
					</tr>
					<tr>
						<th class="text-left">Start_Date</th>
						<td><?php echo $add['start_date'];?></td>
					</tr>
					<tr>
						<th class="text-left">End_Date</th>
						<td><?php echo $add['end_date'];?></td>
					</tr>
					<tr>
						<th class="text-left">Image</th>
						<td><?php echo $add['image'];?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>