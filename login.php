<?php
			session_start();
			
?>
			
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<script src="jquery.min.js"></script>
    <script>
      $(document).ready(function(){
		  $("#btn1").click(function(){
			var a = $("#a1").val();
	    	var b = $("#a2").val();
				$.ajax({
						url:"login_crud.php",
						type:"POST",
						data:{a1:a,a2:b},
						success:function(data){
							alert(data);
							if(data=="success")
							{
								<?php
								$_SESSION['flag']=1;
								?>
								window.location.href="index1.php";
							}
						},
						error:function(data){
							alert(data);
						}
				});
		  });
	  });
    </script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>
<br>
	
	
		<div class="col-sm-0">
			      <div class="logo-pull-middle"  id="logo" >
				  <!--heading logo-->
				   
			       <img src="img/2.jpg" height=100 width=400>
				   
			      </div>
		</div>
	
	<div class="row align-items-center justify-content-between d-flex">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
			
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Login
					</span>
                    
					
					<div class="wrap-input100 validate-input m-b-20" data-validate = "Username is required">
					<input class="input100" type="text" id="a1" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" id="a2" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<!--<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>-->

					<div class="container-login100-form-btn m-t-17">
						<input type="Button" class="login100-form-btn" id="btn1" value="Login">
					</div>
					<div class="container-login100-form-btn m-t-17">
					<a href="registration.php" class="btn btn-google btn-user btn-block">
					  Create Account
					 </a>
					 </div>
                    
					

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>