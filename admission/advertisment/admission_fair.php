<?php

	$conn = new mysqli('localhost','root','','adm_pro');
	$sql = "SELECT * FROM advertisement";
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

	  <br><br><br>
<div class="container ">
	<div class="row">
	
	<div class="col-lg-3">
		<a class="btn-btn-primary" href="insert_fair.php"><h6>Add new</h6></a>
	</div>
	<div class="col-lg-9">
	<h2 class=" mt-5">Admission fair details</h2>
 
  <table class="table ">
    <thead>
      <tr>
	    <th>ID</th>
        <th>Name</th>
        <th>Title</th>
        <th>Start_date</th>
		<th>End_date</th>
       <th>Image</th>
      </tr>
    </thead>
    <tbody>
	<?php 
		while($row = mysqli_fetch_assoc($result)){ 
	?>
      <tr>
		<td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['title'];?></td>
		<td><?php echo $row['star_date'];?></td>
		<td><?php echo $row['end_date'];?></td>
		<td><?php echo $row['image'];?></td>
		<td>
		<a class="btn btn-info" href="show_fair.php?id=<?php echo $row['id'];?>">view</a>
		<a class="btn btn-primary" href="edit_fair.php?id=<?php echo $row['id'];?>">edit</a>
		<a class="btn btn-danger" onclick="return confirm('are you sure ?')"href="delete_fair.php?id=<?php echo $row['id'];?>">delete</a>
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
