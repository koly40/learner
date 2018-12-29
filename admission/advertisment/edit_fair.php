<?php
	$id = $_GET['id'];
	$conn = mysqli_connect('localhost','root','','adm_pro');
	$sql = "SELECT * FROM advertisement WHERE id = $id";
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
				<a class="btn-btn-info" href="admission_fair.php">Fair list</a>
			</div>
			<div class="col-md-9">
			<h2 class="text-center">Edit fair</h2>
				<form action = "update_fair.php?id=<?php echo $id ?>" method = "POST">
					<div class="form-group">
						<label for="exampleInputEmail">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Department name" value="<?php echo $dpt['name']?>">
					</div>
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control" id="age" name="title" placeholder="Seat"value="<?php echo $dpt['title']?>">
					</div>
					<div class="form-group">
						<label for="">Start_Date</label>
						<input type="text" class="form-control" id="roll" name="sd" placeholder="Total_cost"value="<?php echo $dpt['start_date']?>">
					</div>
					<div class="form-group">
						<label for="">End_Date</label>
						<input type="text" class="form-control" id="address" name="ed" placeholder="Duration"value="<?php echo $dpt['end_date']?>">
					</div>
					<div class="form-group">
						<label for="">Image</label>
						<input type="text" class="form-control" id="address" name="uploadfile" placeholder="Duration"value="<?php echo $dpt['image']?>">
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