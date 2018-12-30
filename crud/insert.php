<?php

	$conn = mysqli_connect('localhost','root','','adm_pro');
	$sql = "SELECT * FROM social_science_faculty";
	$result = mysqli_query($conn,$sql);
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
				<a class="btn-btn-info" href="Social_Science_Faculty.php">Depertment list</a>
			</div>
			<div class="col-md-9">
			<h2 class="text-center">add new depertment</h2>
				<form action = "store.php" method = "POST">
					<div class="form-group">
						<label for="exampleInputEmail">Depertment name</label>
						<input type="text" class="form-control" id="name" name="department" placeholder="Department name">
					</div>
					<div class="form-group">
						<label for="">Seat</label>
						<input type="text" class="form-control" id="age" name="seat" placeholder="Seat">
					</div>
					<div class="form-group">
						<label for="">Total_cost</label>
						<input type="text" class="form-control" id="roll" name="total_cost" placeholder="Total_cost">
					</div>
					<div class="form-group">
						<label for="">Duration</label>
						<input type="text" class="form-control" id="address" name="duration" placeholder="Duration">
					</div>
					
					<button type="submit" class="btn btn-default">submit</button>
				</form>
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>