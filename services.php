<?php
include_once("headeri.php");
?>		
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
		<title>Our Services</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">			
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
		  	 
			<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12"><br><br><br>
							<h1 class="text-white">
								Services				
							</h1>	
							<p class="text-white link-nav"><a href="index1.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.php"> Services</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start services Area -->
			<section class="services-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Services</h1>
		                        <p>At about this time of year, some months after New Year’s resolutions have been made and kept, or made and neglected.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
					<?php
					include("config1.php");
					$s="select * from tbl_service";
					$res=mysqli_query($con,$s);
					while($r=mysqli_fetch_array($res))
					{
					?>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4><?php echo $r[1];?></h4></a>
								<p>
									<?php echo $r[2];?>
								</p>
							</div>
						</div>
					<?php } ?>														
					</div>
				</div>	
			</section>
			<!-- End services Area -->				

			<!-- Start fact Area --
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">6784</h1>
							<p>Happy Clients</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee</p>
						</div>	
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">435</h1>
							<p>Real Professionals</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->				

			<!-- Start price Area --
			<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choose Your Plan</h1>
								<p>When someone does something that they know that they shouldn’t do, did they.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Economy</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£299.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£399.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>Exclusive</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£499.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End price Area -->			

			<!-- Start testimonial Area ->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Client’s Feedback About Me</h1>
		                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
		                            </p>
		                            <h4>Harriet Maxwell</h4>
		                            <p>CEO at Google</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
		                            <p>CEO at Facebook</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->			

            <!-- start footer Area --
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>
                                    We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                                </p>
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Stay updated with our latest trends</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>