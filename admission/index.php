<?php
		
		include ('database.php');
		$dt = date('Y-m-d');
		
		$sql = "SELECT * FROM advertisement ";// where end_data > $dt ";
		$result = $db->query($sql);
		$row = $result->fetch_row();
		/*
		while($row = $result->fetch_row()){
			echo $row[5];
			echo "<div id = 'img_div'>";
				
				echo "<img src='upload/".$row[5]."'>";
			echo "</div>";
		}
		*/
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
      <link rel="shurtcut icon" type="image/x-icon" href="imgage/favicon.png">
      <link rel="stylesheet" href="css/navbar-fixed.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style1.css">
      <title>University admition information</title>
      <style>
         /* Make the image fully responsive */
         .carousel-inner img {
         width: 100%;
         height: 600px;
         margin-top:90px;
         }
		  .login{
         width:360px;
         margin:58px auto;
         font:cambria,"hoefler text","liberation serif",Time,"time new roman",serif;
         border-radius:10px;
         border:2px solid #ccc;
         padding: 10px 40px 25px;
         margin-top:70px;
         }
         input[type=text],input[type=password]{
         width:99%;
         padding:10px;
         margin-top:8px;
         border:1px solid #ccc;
         padding-left:5px;
         font-size:16px;
         font-family:cambria,"hoefler text","liberation serif",Time,"time new roman",serif;
         }
         input[type=submit]{
         width:100%;
         background-color:#889;
         color: #fff;
         border:2px solid #86f;
         padding:10px;
         font-size:20px;
         cursor:pointer;
         border-radius:5px;
         margin-bottom: 15px;
         }
      </style>
	  <script>
		function collegeFeature(cn)
			{
				
				 $('#feature').load("college_feature.php?name="+cn);	
				
			}
			
		</script>
   </head>
   <body>
      <!--MANU-->
      <nav class="navbar navbar-light navbar-expand-lg py-3 fixed-top">
         <div class="container">
            <a href = "#showcase">
            <img src="image/LogoMakr_4OCZ1H.png" alt="momo" class="img-fluid"
               width="70" height="70"/></a>
            <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul>
                  <li><a class="nav-link" href = "index.html">Home</a></li>
                  <li><a class="nav-link" href ="Admin.html">Admin</a></li>
                  <li>
                     <a class="nav-link" href ="admission.html">University-List &raquo;</a>
                     <ul>
                        <li>
                           <a class="nav-link" href="admission.html">Public</a>
                           <ul>
                              <li><a class="nav-link" href="#">Dhaka univarsity</a></li>
                              <li><a class="nav-link" href="#">Chattogram univarsity</a></li>
                              <li><a class="nav-link" href="#">Khulna univarsity</a></li>
                              <li><a class="nav-link" href="#">Rajshahi univarsity</a></li>
                              <li><a class="nav-link" href="#">Sylhet univarsity</a></li>
                           </ul>
                        </li>
                        <li>
                           <a class="nav-link" href="admission.html">Private</a>
                           <ul>
                              <li><a class="nav-link" href="#">NSU</a></li>
                              <li><a class="nav-link" href="#">AIUB</a></li>
                              <li><a class="nav-link" href="#">BUBT</a></li>
                              <li><a class="nav-link" href="#">BUPT</a></li>
                              <li><a class="nav-link" href="#">Brack</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a  class="nav-link" href ="#">Admission&raquo;</a>
                     <ul>
                        <li><a class="nav-link" href="admission.html">Public</a></li>
                        <li><a class="nav-link" href="#">Private</a></li>
                     </ul>
                  </li>
                 
                   <li><a  href = "#" class="nav-link"  data-toggle="modal" data-target="#myModal">Login&raquo; </a></li>
               </ul>
            </div>
         </div>
      </nav>
	  <!--modal-->
	  <?php
		
		$sql = "SELECT * FROM users";
		$result = $db->query($sql);
		
	  ?>
	   <div class="modal" id="myModal">
		 <div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<form class="form" action="confirmlogin.php" method="post">	
			<div class="modal-body">
			 <label>Username</label>
			 <input type="email" name="email" id="email" class="form-control"/>
			 <br/>
			 <label>Password</label>
			 <input type="password" name="password" id="password" class="form-control"/>
			 <br/>
			 <button type="submit" name="login_button" id="login_button" class="btn btn-warning"/> Login</button>
			</div>
			</form>
		  </div>
		</div>
		</div>
	  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  <script>
		$('.message a').click(function(){
		$('form').animate({height: "toggle", opacity: "toggle"},"slow");
		});
	  </script>
	  <!--end modal-->
      <!--Advertisment-->	  
      <div class="AddsSitemaps">
	  <br><br>
         <div class="container">
            <div class="row">
               <div class="addsbanner ml-5 ">
			   <?php
                   echo "<img src='upload/".$row[5]."'>";
					/*while($row = $result->fetch_row()){
					 echo $row[5];
					 echo "<div id='img_div'>";
					 echo "<img src='upload/".$row[5]."'>";
					 echo "</div>";
					}*/
				?> 
               </div>
            </div>
         </div>
      </div>
      <!--START CARASOUL SECTION-->
      <div id="myCarousel" class="carousel slide">
         <!-- Indicators -->
         <ul class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
            <li class="item4"></li>
            <li class="item5"></li>
         </ul>
        
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="image/raj_1.jpg" alt="Los Angeles" class="img-fluid bbb">
            </div>
            <div class="carousel-item">
               <img src="image/khul_2.jpg" alt="Chicago" class="img-fluid bbb">
            </div>
            <div class="carousel-item">
               <img src="image/chitt_3.jpg" alt="New York" class="img-fluid bbb">
            </div>
            <div class="carousel-item">
               <img src="image/chit_4.jpg" alt="New York" class="img-fluid bbb">
            </div>
            <div class="carousel-item">
               <img src="image/dhak_5.jpg" alt="New York" class="img-fluid bbb">
            </div>
         </div>
         <!-- Left and right controls -->
         <a class="carousel-control-prev" href="#myCarousel">
         <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#myCarousel">
         <span class="carousel-control-next-icon"></span>
         </a>
      </div>
      </div>
      </div>
      <script>
         $(document).ready(function(){
             // Activate Carousel
             $("#myCarousel").carousel();
             
             // Enable Carousel Indicators
             $(".item1").click(function(){
                 $("#myCarousel").carousel(0);
             });
             $(".item2").click(function(){
                 $("#myCarousel").carousel(1);
             });
             $(".item3").click(function(){
                 $("#myCarousel").carousel(2);
             });
             
             // Enable Carousel Controls
             $(".carousel-control-prev").click(function(){
                 $("#myCarousel").carousel("prev");
             });
             $(".carousel-control-next").click(function(){
                 $("#myCarousel").carousel("next");
             });
         });
      </script>
      
      <div class="container">
         <h2 class="display-5 text-center py-3">University features</h2>
         <div class="card-deck">
            <div class="card ">
               <img class="card-img-top" src="image/maxresdefault (2).jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Jahangirnagar university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="jagonnath_university_details.html" class="btn btn-outline-danger">See more</a>
                <!--   <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
            <div class="card ">
               <img class="card-img-top" src="image/Chittagong.jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Jagannath university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-outline-danger"data-toggle="modal" data-target="#Modal">See more</a>
                 <!--  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SAVE</a> -->
				
				<!--modal-->
			<?php
					/*  include "database.php";
					$sql = "SELECT * FROM feature_details";// where end_data > $dt ";
					$result =$db->query($sql);
				while($row = mysqli_fetch_array($result)) { 
					echo "<div id='img_div'>";
					echo "<img src = 'upload/".$row['image']."'>";
					echo "<p>".$row['title']."</p>";
					echo "<p>".$row['description']."</p>";
					echo "</div>";
				 
					} */
			
				?> 
				<div class="modal" id="Modal">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p>
							fthgfjhykjkljlklk
							</p>
						</div>
					  </div>
					</div>
				</div>
			   <!--******************-->
			  
			  </div>
            </div>
            <div class="card">
               <img class="card-img-top" src="image/03_51420.jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Dhaka university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="Dhaka_University_Details.html" class="btn btn-outline-danger">See more</a>
                 <!--  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
            <div class="card">
               <img class="card-img-top" src="image/chtiiagong university gate.png" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Chittagong university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="chittagong_university_details.html" class="btn btn-outline-danger">See more</a>
                 <!--  <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
         </div>
      </div>

	   <div class="container">
         </br>
         <div class="card-deck">
            <div class="card ">
               <img class="card-img-top" src="image/Sylhet.jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Sylhet university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="Dhaka_University_Details.html" class="btn btn-outline-danger">See more</a>
                <!--   <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
            <div class="card ">
               <img class="card-img-top" src="image/khulna-u-20170804153115.jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">khulna university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-outline-danger">See more</a>
                  <!-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
            <div class="card">
               <img class="card-img-top" src="image/Rajshahi.jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Rajshahi university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-outline-danger">See more</a>
                 <!--  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
            <div class="card">
               <img class="card-img-top" src="image/WEB_Jagannath-University_Body-1Edited_23.06.2017.jpg" alt="Card image" style="width:100%">
               <div class="card-body">
                  <h4 class="card-title">Jagannath university</h4>
                  <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                  <a href="#" class="btn btn-outline-danger">See more</a>
                 <!--  <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#myModal">SAVE</a> -->
               </div>
            </div>
         </div>
      </div>
	  <br><br><br>
	  <?php
	  include "database.php";
	  $sql = "SELECT * FROM college_feature";// where end_data > $dt ";
	  $result =$db->query($sql);
	 
	  
	  ?>
	<h2 class="display-5 text-center py-3">College Feature</h2>
	  <div class="container">
		<div class="row">
			<div class="col-lg-4">
                 <a href="#" onclick="collegeFeature(1)">Dhaka college</a>
                  <div class="dropdown-divider"></div>
				 <a href="#" onclick="collegeFeature(2)">Titomir college</a>
                  <div class="dropdown-divider"></div>
                 <a href="#"onclick="collegeFeature(3)">Bangla college</a>
                  <div class="dropdown-divider"></div>
                 <a href="#" onclick="collegeFeature(4)">Eden college</a>
				  <div class="dropdown-divider"></div>
                 <a href="#" onclick="collegeFeature(5)">Dhaka commerce college</a>
			      <div class="dropdown-divider"></div>
            </div>
			<div  class="col-lg-8">
				<p id="feature"><img class="card-img-top" src="image/WEB_Jagannath-University_Body-1Edited_23.06.2017.jpg" alt="Card image" style="width:50%">When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that </p>
			</div>
			</div>
		</div>
	  <br><br><br>
      <section id="footer-main" class="py-5 clor">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 text-light">
                  <p>Copyright © 2018 Mizuxe.</p>
                  <span>Designed By:Momotaj</span>
               </div>
               <div class="col-lg-10">
                  <div class="row">
                     <div class="col-lg-2 text-light">
                        <p class="lead text-warning">For contact</p>
                        <hr/>
                        <p>office of the vice chancellor
                           administration buliding(1st Floor)
                           University of Dhaka
                           Phone:+88-9672533
                           email:vcoffice@du.com
                        </p>
                     </div>
                     <div class="col-lg-2 text-light mt-5">
                        <p>office of the vice chancellor
                           administration buliding(1st Floor)
                           University of Sylhet
                           Phone:+88-9672533
                     </div>
                     <div class="col-lg-2 text-light mt-5">
                        <p>office of the vice chancellor
                           administration buliding(1st Floor)
                           University of Khulna
                           Phone:+88-9672533
                           email:vcoffice@du.com
                        </p>
                     </div>
                     <div class="col-lg-2 text-light mt-5">
                        <p>office of the vice chancellor
                           administration buliding(1st Floor)
                           University of Rajshahi
                           Phone:+88-9672533
                     </div>
                     <div class="col-lg-2 text-light mt-5">
                        <p>office of the vice chancellor
                           administration buliding(1st Floor)
                           University of Chattogram
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/navbar-fixed.js"></script>
   </body>
</html>