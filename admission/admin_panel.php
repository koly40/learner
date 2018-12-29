<?php 

session_start();

	include ('database.php');
	if(!isset($_SESSION['login'])){
	header("location:index.php");
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<script>
/*
$(document).ready(function(){

alert("f");
});
 var m = location.search.split('m=')[1]
 if(m=='sch') scholar();
 alert('jjj');

var page = getUrlParameter('page');
*/
 function result()
  {
  $('#cont').load("result/index.php");	
  }
 function college()
  {
  $('#cont').load("col_basic_crud/index.php");	
  }
 function colleged()
  {
  $('#cont').load("col_details_crud/index.php");	
  }
 function fair()
  {
  $('#cont').load("fair/index.php");	
  }
 function science()
  {
  $('#cont').load("science_faculty/index.php");	
  }
 function social()
  {
  $('#cont').load("social_science_faculty/index.php");	
  }
 function notice()
  {
  $('#cont').load("notice/index.php");	
  }
 function student()
  {
  $('#cont').load("studentpage/index.php");	
  }
 function scholar()
  {
  $('#cont').load("scholarship/index.php");	
  }
 function details()
  {

  $('#cont').load("uni_details/index.php");	
	
  }
 function registration()
  {
	$('#cont').load("owner_registration_crud/index.php");	
  }
  function university()
{

	 $('#cont').load("university/index.php");	
	
}

</script>
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-blue.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a></a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration:none">
                                <i class="fas fa fa-graduation-cap"></i>University</a>
                        </li>
                      <li>
                            <a class="js-arrow" href="#" style="text-decoration:none">
                                <i class="fas fa fa-group"></i>College </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#" style="text-decoration:none"><i class="fas fa fa-group"></i>College 
                                    Basic</a>
                                </li>
                                <li>
                                    <a href="#" style="text-decoration:none"><i class="fas fa fa-group"></i>College Details</a>
                                </li>
                      </ul>
                        </li>  
                        <li>
                            <a href="#" style="text-decoration:none">
                                <i class="fas fa fa-address-card"></i>Owner</a>
                        </li>
						<li>
                            <a class="js-arrow" href="#" style="text-decoration:none">
                                <i class="fas fa fa-address-card"></i>Owner </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Owner 
                                    Registration</a>
                                </li>
                                <li>
                                    <a href="#" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Science Faculty</a>
                                </li>
                                
                                 <li>
                                    <a href="#" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Social Science Faculty</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#" style="text-decoration:none">
                                <i class="far fa fa-caret-square-o-right"></i>Admission</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Notice</a>
                                </li>
                                <li>
                                    <a href="#" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Fair</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#" id="sch1">
                                <i class="fas fa fa-graduation-cap"></i>Sholarship</a>
                        </li>
                        <li>
                            <a href="#" id="res">
                                <i class="	fa fa-registered"></i>Result Notice</a>
                        </li>
                        <li>
                            <a href="#" id="sch1">
                                <i class="fas fa fa-graduation-cap"></i>Sholarship</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration:none">
                                <i class="fas fa fa-child"></i>Registered Users</a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration:none">
                                <i class="fas fa fa-certificate"></i>feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo-blue.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="admin_panel.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a></a>
                        </li>
                        <li>
                            <a href="#" onclick="university()"   style="text-decoration:none">
                                <i class="fas fa fa-graduation-cap"></i>University</a>
                        </li>
                         <li>
                            <a class="js-arrow" href="#" style="text-decoration:none">
                                <i class="fas fa fa-address-card"></i>College </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#" onclick="college()"style="text-decoration:none"><i class="fas fa fa-group"></i>College 
                                    Basic</a>
                                </li>
                                <li>
                                    <a href="#" onclick="colleged()" style="text-decoration:none"><i class="fas fa fa-group"></i>College Details</a>
                                </li>
                      </ul>
                        </li>  
                        <li>
                           <a href="#"  style="text-decoration:none"><i class=" fas fa fa-address-card"></i>Owner</a>
                        </li>
						<li>
                           <a class="js-arrow" href="#" style="text-decoration:none">
                            <i class="fas fa fa-address-card"></i>Owner Page</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                    <a href="#"   onclick="registration()" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Owner 
                                    Registration</a>
                                </li>
                            
                                <li>
                                    <a href="#" onclick="science()" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Science Faculty</a>
                                </li>
                                <li>
                                    <a href="#"  onclick="social()" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Social Science Faculty</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#" style="text-decoration:none">
                                <i class="far fa fa-caret-square-o-right"></i>Admission</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#" onclick="notice()" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Notice</a>
                                </li>
                                <li>
                                    <a href="#" onclick="fair()" style="text-decoration:none"><i class="far fa fa-calendar-o"></i>Fair</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                    <a href="#" onclick="result()" style="text-decoration:none"><i class="fa fa-registered"></i>Result Notice</a>
                        </li>
                        <li>
                            <a href="#" onclick="scholar()" style="text-decoration:none"><i class="fas fa fa-graduation-cap"></i>Sholarship</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa fa-child"></i>Registered Users</a>
                        </li>
                         <li>
                            <a href="#" onclick="student()" style="text-decoration:none"><i class="fas fa fa-child"></i>Student registation</a>
                        </li>
                        
                        <li>
                            <a href="table.html">
                                <i class="fas fa fa-certificate"></i>feedback</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            Welcome to Admin Panel
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">admin@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
			<?php
				include ('database.php');
				 $sql = "SELECT *FROM users";
				 $result =$db->query($sql);
				 $rowcount = mysqli_num_rows($result);
				 
				 $sql = "SELECT *FROM uni_basic";
				 $result =$db->query($sql);
				 $row = mysqli_num_rows($result);
				 
				 $sql = "SELECT *FROM col_basic";
				 $result =$db->query($sql);
				 $count = mysqli_num_rows($result);
				 
				 $sql = "SELECT *FROM adm_fair";
				 $result =$db->query($sql);
				 $cont = mysqli_num_rows($result);
			?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $rowcount; ?></h2>
                                                <span>online</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $row; ?></h2>
                                                <span>Universities</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $count; ?></h2>
                                                <span>Colleges</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-card"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $cont; ?></h2>
                                                <span >Fairs</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" id="cont">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Recent Admission Notices</h2>
                                <div class="table-responsive table--no-card m-b-40" >
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 All rights reserved. Developed by CCSL WPSI-36 Group-A</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
