<?php
include_once("headeri.php");
?>


<html>
<head>
<script src="jquery.min.js"></script>
<script>

			$(document).ready(function(){
          			$.ajax({
					url:"User_Ud.php",
					type:"post",
					data:{},
				    success:function(data)
					{
						var arr=data.split('#');
						$("#a1").val(arr[0]);
						$("#a2").val(arr[1]);
						$("#a3").val(arr[2]);
						$("#a4").val(arr[3]);
						$("#a5").val(arr[4]);
						$("#a6").val(arr[5]);
						$("#a7").val(arr[6]);
						$("#a8").val(arr[7]);
						
					},
			        error:function(data)
					{
					},
					
				}),
				$("#btn1").click(function(){
	    var a=$("#a1").val();
		var b=$("#a2").val();
		var c=$("#a3").val();
		var d=$("#a4").val();
		var e=$("#a5").val();
		var f=$("#a6").val();
		var g=$("#a7").val();
		var h=$("#a8").val();
	   $.ajax({
		   url:"User_update.php",
		   type:"post",
		   data:{x1:a,x2:b,x3:c,x4:d,x5:e,x6:f,x7:g,x8:h},
		   success:function(data){
			   alert(data);
		   }
	   });
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
								Profile
							</h1>	
							<p class="text-white link-nav"><a href="index1.php">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="User_profile.php">Profile</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

<center>
<pre>
    <h4>Id:           <input type="text" name="id" id="a1" ></h4>
    <h4>Name:         <input type="text" name="title" id="a2" ></h4>
    <h4>Date of Birth:<input type="text" name="name" id="a3" ></h4>
    <h4>Mobile No     <input type="number" name="Mob_no" id="a4" ></h4>
    <h4>Address:      <input type="text" name="phone_number" id="a5" ></h4>
    <h4>Email:        <input type="text" name="Email" id="a6" ></h4>
	<h4>User name:    <input type="text" name="User_nm" id="a7" ></h4>
	<h4>Password:     <input type="text" name="password" id="a8" ></h4>
		<!--<input type="button" value="Update" id="btn1">-->
		<!--<input type="button" name="submit" id="btn1" class="submit" value="SUBMIT" >-->
	<input type="button" class="primary-btn text-uppercase" id="btn1" value="Update">
</pre>
</center>
</body>
</html>		