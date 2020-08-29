<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Shree Consulting</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
				  <!--heading logo-->
			        <img src="img/2.jpg" height=100 width=400/>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index1.php">Home</a></li>
			          <li><a href="services.php">Services</a></li>
			          <li><a href="U_about.php">About Us</a></li>
			          <li><a href="User_contactus.php">Contact Us</a></li>
					  <?php
					  session_start();
					  
					  
					  if(isset($_SESSION['flag']))
					  {
					  echo "<li><a href='User_profile.php'>Profile</a></li>";
					  echo "<li><a href='Feed.php'>Feedback</a></li>";
					  
					  echo "<li><a href='jappointment.php' class='primary-btn text-uppercase'>Make Appointment</a></li>";
					  }
					  if(isset($_SESSION['flag']))
					  {
						$_SESSION['flag']=false;
						  echo "<li><a href='logout.php'>LogOut</a></li>";  
					  }
					  else
					  {
						  echo "<li><a href='login.php'>Login</a></li>";  
					  }
					  
					  ?>
			          
					  <li><a href="price.html"></a></li>
			          <!--<li class="menu-has-children"><a href="">Blog</a>
			            <ul>
			              <li><a href="blog-home.html">Blog Home</a></li>
			              <li><a href="blog-single.html">Blog Single</a></li>
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
		            	  <li><a href="elements.html">Elements</a></li>
				          <li class="menu-has-children"><a href="">Level 2 </a>
				            <ul>
				              <li><a href="#">Item One</a></li>
				              <li><a href="#">Item Two</a></li>
				            </ul>
				          </li>					                		
			            </ul>
			          </li>					          					          		          
			          <li><a href="contact.html">Contact</a></li>-->
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
