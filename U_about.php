<?php
include_once("headeri.php");
?>	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	    <!--<script src="jquery.min.js"></script>
			<script>	
				$(document).ready(function(){
				$.ajax({
					url:"U_about_display.php",
					type:"post",
					data:{},
				    success:function(data)
					{
						var arr=data.split('@');
						var x1=$("#a1").val(arr[0]);
						var x2=$("#a2").val(arr[1]);
						var x3=$("#a3").val(arr[2]);
						//var temp="<img src='"+arr[2]+"' height=200 width=300 ></img>";
						//$("#temp").html(temp);
					},
			        error:function(data)
					{
					},
					
				});
			});-->	
		
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
		<title>About Us</title>

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
		    <br><br><br><br><br><br><br>
		    
			<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us
							</h1>	
							<p class="text-white link-nav"><a href="index1.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="U_about.php"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
				<?php
					include("config1.php");
					$s="select * from tbl_aboutus";
					$res=mysqli_query($con,$s);
					while($r=mysqli_fetch_array($res))
					{
					?>
					
				
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="<?php echo $r[3];?>" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							
							<h1 class="text-uppercase"><?php echo $r[1];?></h1>
							<p>
								<?php echo $r[2];?>
							</p>
							
						</div>
						
				</div>	
					<?php } ?>
			</section>
			
			<!-- End home-about Area -->	

			<!-- Start timeline Area --
			<section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">My Qualifications</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
			        <h4>
			          <time>Masters in Graphics & Fine Arts</time>
			        </h4>
			        <p><b>Session:</b> 2010-11</p>
			        <p><b>Result:</b> 3.78 (In the Scale of 4.00)</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt="">
			        <h4>
			          <time>Creative Content Developer</time>
			        </h4>
			        <p>July 2015 to Present</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
			          <time>Bachelor in Graphics & UI/UX</time>
			        </h4>
			        <p><b>Session:</b> 2006-09</p>
			        <p><b>Result:</b> 3.40 (In the Scale of 4.00)</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt="">
			        <h4>
			          <time>Senior UI/UX Designer</time>
			        </h4>
			        <p>July 2015 to Present</p>
			      </div>
			    </li>
			    <li>
			      <div class="content">
			        <h4>
			          <time>Diploma in Fine Arts & Printing</time>
			        </h4>
			        <p><b>Session:</b> 2003-06</p>
			        <p><b>Result:</b> 4.94 (In the Scale of 5.00)</p>
			      </div>
			    </li>
			  </ul>
			</section>		

			<!-- End timeline Area -->


			<!-- Start testimonial Area --
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

		    <!-- Start brands Area --
		    <section class="brands-area">
		        <div class="container">
		            <div class="brand-wrap">
		                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End brands Area -->	

            <!-- start footer Area ->
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