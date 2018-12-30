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
			<h2 class="text-center">Edit department</h2>
				<form action = "update.php?id=<?php echo $id ?>" method = "POST">
					<div class="form-group">
						<label for="exampleInputEmail">Department name</label>
						<input type="text" class="form-control" id="name" name="department" placeholder="Department name" value="<?php echo $dpt['department']?>">
					</div>
					<div class="form-group">
						<label for="">Seat</label>
						<input type="text" class="form-control" id="age" name="seat" placeholder="Seat"value="<?php echo $dpt['seat']?>">
					</div>
					<div class="form-group">
						<label for="">Total_cost</label>
						<input type="text" class="form-control" id="roll" name="total_cost" placeholder="Total_cost"value="<?php echo $dpt['total_cost']?>">
					</div>
					<div class="form-group">
						<label for="">Duration</label>
						<input type="text" class="form-control" id="address" name="duration" placeholder="Duration"value="<?php echo $dpt['duration']?>">
					</div>
					<button type="submit" class="btn btn-default">submit</button>
				</form>
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>