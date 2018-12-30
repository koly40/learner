<?php
	 $id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','adm_pro');
	$sql = "SELECT * FROM social_science_faculty WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	$dpt = mysqli_fetch_assoc($result);
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
  <br/><br/><br/>
  
    <div class="container">
		<div class="row">
			<div class="col-md-3">
				<a class="btn-btn-info" href="social_science_faculty.php">Department list</a>
			</div>
			<div class="col-md-9">
			<h2 class="text-center">Particuler department detail</h2>
				<table class="table">
					<tr>
						<th class="text-left">Department name</th>
						<td><?php echo $dpt['department'];?></td>
					</tr>
					<tr>
						<th class="text-left">Seat</th>
						<td><?php echo $dpt['seat'];?></td>
					</tr>
					<tr>
						<th class="text-left">Total cost</th>
						<td><?php echo $dpt['total_cost'];?></td>
					</tr>
					<tr>
						<th class="text-left">Duration</th>
						<td><?php echo $dpt['duration'];?></td>
					</tr>
					
				</table>
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>