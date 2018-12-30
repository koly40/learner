<?php

	$conn = mysqli_connect('localhost','root','','adm_pro');
	$sql = "SELECT * FROM social_science_faculty";
	$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
 
</head>
<body>

<div class="container ">
	<div class="row">
	
	<div class="col-lg-3">
		<a class="btn-btn-primary" href="insert.php"><h2>Add new department</h2></a>
	</div>
	<div class="col-lg-9">
	<h2 class=" mt-5">Faculty details</h2>
 
  <table class="table ">
    <thead>
      <tr>
	    <th>ID</th>
        <th>Department</th>
        <th>Seat</th>
        <th>Total Cost</th>
		<th>Duration</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php 
		while($row = mysqli_fetch_assoc($result)){ 
	?>
      <tr>
		<td><?php echo $row['id'];?></td>
        <td><?php echo $row['department'];?></td>
        <td><?php echo $row['seat'];?></td>
		<td><?php echo $row['total_cost'];?></td>
		<td><?php echo $row['duration'];?></td>
		<td>
		<a class="btn btn-info" href="show.php?id=<?php echo $row['id'];?>">view</a>
		<a class="btn btn-primary" href="edit.php?id=<?php echo $row['id'];?>">edit</a>
		<a class="btn btn-danger" onclick="return confirm('are you sure ?')"href="delete.php?id=<?php echo $row['id'];?>">delete</a>
		</td>
      </tr>
	<?php } ?>
    </tbody>
  </table>
  </div>
</div>
</div>

</body>

</html>
