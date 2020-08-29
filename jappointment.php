<?php
include_once("headeri.php");
?>

<html>
<head>
<title>User Appointment</title>
<script src="jquery.min.js"></script>
<script>
  $(document).ready(function(){
	  $("#a1").change(function(){
		  var a=$("#a1").val();
		 // alert(a);
		  $.ajax({
			  url:"Appointment_crud.php",
			  type:"POST",
			  data:{Date1:a},
			  success:function(data){
				 // alert(data);
				 $("#z1").html(data);
			  }
			  
		  })
		  $.ajax({
			  url:"Service_crud.php",
			  type:"post",
			  data:{},
			  success:function(data){
				  $("#z2").html(data);
			  }
	  })
	    
	  
	}),
	$("#btn1").click(function(){
		  var ap_id=$("#z1").val();
		  var sr_id=$("#z2").val();
		  //alert("Appointment id:"+ap_id+" Service id:"+sr_id);
		  $.ajax({
		  url:"Appointment_insert.php",
		  type:"post",
		  data:{a_id:ap_id,s_id:sr_id},
		  success:function(data){
			  alert(data);
		  }
		  });
	  });
	  
	    
});  

</script>
</head>
<body>
<form method="POST">
<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12"><br><br><br>
							<h1 class="text-white">
								Appointment
							</h1>	
							<p class="text-white link-nav"><a href="index1.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="jappointment.php">Appointment</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
<center>
<h4>Enter date:   <input type="date" name='a1' id="a1"></h4><br>
<h4>Enter time:   <select name='a2'id="z1"></select></h4><br>
<h4>Enter service:<select name='a3'id="z2"></select></h4><br>


<!--<input type="button"  value="save" id="btn1">-->
	<input type="button" class="primary-btn text-uppercase" id="btn1" value="SAVE">

</center>
</form>
</body>
</html>
