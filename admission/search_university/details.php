<?php
	$conn = new mysqli('localhost','root','','adm_pro');
	$sql = "SELECT * FROM uni_details";
	$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
 	 <div class="modal" id="myModal">
		 <div class="modal-dialog">
		 <?php 
				while($row = mysqli_fetch_assoc($result)) { 
			?>
		  <div class="modal-content">
			<!-- Modal Header -->
			
			<div class="modal-header">
			  <h4 class="modal-title"><? echo $row['department']; ?></h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
			 <br><br><br><br>
			 <br><br><br><br>
			</div>
			
			<!-- Modal footer -->
			<div class="modal-footer">
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
			
		  </div>
		<?php } ?>
		</div>
		</div>
  
</div>

</body>
</html>