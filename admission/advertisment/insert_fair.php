 <?php
		
		$db = mysqli_connect("localhost","root","","adm_pro");
		$sql = "SELECT * FROM advertisement";
		$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){
			echo "<div id='img_div'>";
				echo "<img src=' upload'".$row['image'].">";
			echo "</div>";
		}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
 
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style1.css">
      <title>University admission information</title>
	 
   </head>
   <body>
     
      <!--Notice section-->
      <section id="Notice">
         <div class="container">
         <div class="row">
		  <div class="col-lg-3">
			<button><a class="btn-btn-primary" href="admission_fair.php">Show details</a></button>
		  </div>
            <div class="col-lg-6">
               <div class="card color">
                  <div class="card-body">
                     <form action="adm_fair.php" method="post" enctype="multipart/form-data" >
                        <div class="container">
                           <h1 align="center"> Admission fair</h1>
                           <br>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" class="form-control" name="title" id="text">
									<span id="titleid" class="text-danger font-weight-bold"></span>
                                 </div>
                              </div>
                         
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="Form_cost">Name:</label>
                                    <input type="text" class="form-control" name="name" id="cs">
									<span id="costid" class="text-danger font-weight-bold"></span>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="Notice_link ">Start_date:</label>
                                    <input type="date" class="form-control" name="sd" id="NL">
									<span id="noticeid" class="text-danger font-weight-bold"></span>
                                 </div>
                              </div>
							   <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="Notice_link ">End_date:</label>
                                    <input type="date" class="form-control" name="ed" id="NL">
									<span id="noticeid" class="text-danger font-weight-bold"></span>
                                 </div>
                              </div>
							   <div class="col-md-12">
									<input type="file"  name="uploadfile" /><br><br><br><br>
								</div>
                           <button type="submit" name="uploadfilesub" value="upload" class="btn btn-primary form-control">Submit</button>
                     </form>
                     </div>
                  </div>
               </div>
			  </div>
			  </div>
            </div>
         </div>
      </section>
      <script src="js/jquery.min.js"></script>
      
      <script src="js/bootstrap.min.js"></script>
    
   </body>
</html>