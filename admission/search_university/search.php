<!DOCTYPE html>
<html>
   <head>
      <title>tabular form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <style>
         * {box-sizing: border-box;}
         body { 
         margin: 0;
         font-family: Arial, Helvetica, sans-serif;
         }
         .topnav {
         overflow: hidden;
         background-color: #e9e9e9;
         }
         .topnav a {
         float: ;
         display: ;
         color: black;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 17px;
         }
         .topnav a:hover {
         background-color: #ddd;
         color: black;
         }
         .topnav a.active {
         background-color: #2196F3;
         color: white;
         }
         .topnav .search-container {
         float: right;
         margin-bottom:8px;
         }
         .topnav input[type=text] {
         padding: 6px;
         margin-top: 8px;
         font-size: 17px;
         border: none;
         }
         .topnav .search-container button {
         float: right;
         padding: 6px;
         margin-top: 8px;
         margin-right: 16px;
         background: #ddd;
         font-size: 17px;
         border: none;
         cursor: pointer;
         }
         .topnav .search-container button:hover {
         background: #ccc;
         }
         @media screen and (max-width: 600px) {
         .topnav .search-container {
         float: none;
         }
         .topnav a, .topnav input[type=text], .topnav .search-container button {
         float: none;
         display: block;
         text-align: left;
         width: 100%;
         margin: 0;
         padding: 20px;
         }
         .topnav input[type=text] {
         border: 20px solid #ccc;  
         }
         }
      </style>
   </head>
   <body>
   <br/><br/><br/>
      <div class="container">
         <div class="topnav">
            <div class="search-container">
               <form action="#" method="post">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit">Submit</button>
               </form>
            </div>
         </div>
		 <?php
			
			$conn = new mysqli('localhost','root','','adm_pro');
			$sql = "SELECT * FROM uni_details";
			$result = $conn->query($sql);
			/* $dpt = mysqli_fetch_assoc($result); */
		 ?>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="uni_id">University Name:</label>
                  <select class="form-control" id="University">
						<option>Dhaka University</option>
						<option>Chittagang University</option>
						<option>Barishal University</option>
						<option>Rajshahi University</option>
						<option>Khulna University</option>
						<option>Rangpur University</option>
                  </select>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  
				  <label for="uni_id">Department:</label>
                  <select class="form-control" id="University">
					 <?php
						while($row=mysqli_fetch_array($result))
						{
					 ?>
						<option value="<?php $row['id']; ?>"><?php echo $row['department']; ?></option>
					 <?php } ?>	
                  </select>
               </div>
            </div>
         </div>
		 <br><br>
         <h1>Search university information</h1>
         <table class="table">
            <thead>
               <tr>
				  <th>ID</th>
                  <th>University Name</th>
                  <th>Division</th>
                  <th>Location</th>
                  <th>Website Link</th>
               </tr>
            </thead>
            <tbody>
				<?php
					while($rows=mysqli_fetch_array($result))
				{
				?>
               <tr class="active">
                  <td><?php echo $rows['id'];?></td>
                  <td><?php echo $rows['university_name'];?></td>
                  <td><?php echo $rows['division'];?></td>
                  <td><?php echo $rows['location'];?></td>
                  <td><?php echo $rows['website_link'];?></td>
                  <td>
					<!--<a class="btn btn-info" href="#">Details</a>-->
					<a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Details</a>
				  </td>
               </tr>
				<?php } ?>
            </tbody>
         </table>
		 <!--modal start-->
		 <div class="modal" id="myModal">
		 <div class="modal-dialog">
		  <div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
			  <h4 class="modal-title">University details</h4>
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
		</div>
		</div>
      </div>
   </body>
</html>