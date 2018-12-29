<!DOCTYPE html>
<html>
	<head>
		<title>PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="bootstrap.min.css" />
		<script src="bootstrap.min.js"></script>
		 
		<link rel="stylesheet" href="jquery.dataTables.min.css"></style>
		<script type="text/javascript" src="jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="bootstrap-filestyle.min.js"> </script>
		<link href="fonts.css" rel="stylesheet"/>
		<script>
			$(document).ready(function(){
			$('#empTable').dataTable();
			$('.file-upload').file_upload();
			});
		</script>
	</head>
	<body style="margin:20px auto">
		<center><h2><span style="font-size:25px; color:blue">college owner registration crud</span></h2></center>
		<div class="container">
			<br/><br/>
			<div class="row header col-sm-12" style="text-align:center;color:green">
				<div style="height:50px;"></div>
				<table  class="table table-striped table-bordered table-responsive table-hover"  id="empTable"  >
					<thead>
						<th><center>username</center></th>
						<th><center>password</center></th>
						<th><center>email</center></th>
						<th><center>mobile_num</center></th>
						<th><center>Action</center></th>
					</thead>
					<tbody>
						<?php
						include('database.php');
						$result=$mysqli->query("select * from owner_registraion");
						while($row=$result->fetch_assoc()){
						
						?>
						<tr>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['mobile_num']; ?></td>
							<td>
								<a href="#detail<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-open"></span>Detail</a>&nbsp;
								<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<!--include edit modal-->
								<?php include('show_detail_modal.php'); ?>
								<!--End-->
								<!--include delete modal-->
								<?php include('show_delete_modal.php'); ?>
								<!--End-->
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
