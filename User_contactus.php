<?php
include_once("headeri.php");
?>
<html>
<head>
<title>Contact Page</title>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	        $.ajax({
					url:"Contact_user_display.php",
					type:"post",
					data:{},
				    success:function(data)
					{
						var arr=data.split('#');
						$("#a1").val(arr[0]);
						$("#a2").val(arr[1]);
						$("#a3").val(arr[2]);
						
					},
			        error:function(data)
					{
					},
					
				});
            });
</script>			

</head>
<body>

<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12"><br><br><br>
							<h1 class="text-white">
								Contact Us
							</h1>	
							<p class="text-white link-nav"><a href="index1.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="User_contactus.php"> Contact us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
<form>
<pre>
<center>
<h4> Mob_NO:<input type="text" id="a1"></h4>
<h4> Address:<input type="text" id="a2"></h4>
<h4> Email:  <input type="text" id="a3"></h4>
</center>
</pre>
</form>
</body>
</html>