<?php
include_once("headeri.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feedback</title>
	<script src="jquery.min.js"></script>
    <script>
      $(document).ready(function(){
		  $("#btn1").click(function(){
			var a = $("#a1").val();
			
			if(a!="")
			{
	    	$.ajax({
						url:"feedback.php",
						type:"POST",
						data:{a1:a},
						success:function(data){
							alert(data);
							},
						error:function(data){
							alert(data);
						}
				});
		  }
		  
		  else
			  alert("Field should not empty");
		  });
	  });
    </script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images3/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts3/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor3/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css3/util.css">
	<link rel="stylesheet" type="text/css" href="css3/main.css">
<!--===============================================================================================-->
</head>
<body>

    <br><br><br><br><br><br><br>
	<div class="container-contact100">

		<div class="wrap-contact100">
			<form>
				<span class="contact100-form-title">
					Send Us A Feedback
				</span>

				<!--<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>-->

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea id="a1" class="input100" name="message" placeholder="Your Feedback"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
				<input type="button" class="primary-btn text-uppercase" id="btn1" value="Send">
					<!--<input type="button" id="btn1" value="send" class="fa fa-paper-plane-o m-r-6" aria-hidden="true" class="contact100-form-btn">
					
					<button id="btn1" class="contact100-form-btn">
						<span>
							<i ></i>
							Send
						</span>
					</button>-->
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor3/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/bootstrap/js/popper.js"></script>
	<script src="vendor3/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/daterangepicker/moment.min.js"></script>
	<script src="vendor3/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor3/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js3/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
