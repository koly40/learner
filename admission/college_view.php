
<!DOCTYPE html>
<html lang="en">
   <head>
 
      <link rel="stylesheet" href="css/bootstrap.css"/>
      <link rel="stylesheet" href="css/style1.css"/>
      <title>University admission information</title>
	 
   </head>
   <body>
     
      <!--Notice section-->
	 
      <section id="Notice">
         <div class="container">
         <div class="row">
		 <div class="col-lg-3"></div>
            <div class="col-lg-6">
               <div class="card color">
                  <div class="card-body">
                      <br/><br/><br/>
					 <form action="college_insert.php" method="post" enctype="multipart/form-data" >
                        <div class="container">
                           <h1 align="center">College insert form</h1>
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
                                    <label for="Notice_link ">Descriptive:</label>
                                    <input type="text" class="form-control" name="des" id="NL">
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
 