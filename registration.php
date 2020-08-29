<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Registration</title>
   <script src="jquery.min.js"></script>
   <script>
     $(document).ready(function(){
        $("#a8").click(function(){
			 var a=$("#a1").val();
			 var b=$("#a2").val();
			 var c=$("#a3").val();
			 var d=$("#a4").val();
			 var e=$("#a5").val();
			 var f=$("#a6").val();
			 var h=$("#a7").val();
			 $.ajax({
				 url:"Regi_crud.php",
				 type:"post",
				 data:{name:a,date:b,Mob:c,Address:d,Email:e,Uname:f,password:h},
				 success:function(data){
					 alert(data);
					 if(data=="inserted successfully..")
					 {
						 window.location.href="login.php";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts2/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css2/style.css">
</head>
<body>
<br>
<div class="col-sm-0">
			      <div class="logo-pull-middle"  id="logo" >
				  <!--heading logo-->
				   
			       <img src="img/2.jpg" height=100 width=400>
				   
			      </div>
		</div>

    <div class="main">
		<div class="row align-items-center justify-content-between d-flex">
        <div class="container">
          <center>  <form method="POST" class="appointment-form" id="appointment-form">
                <h2>USER REGISTRATION</h2>
                <div class="form-group-1">
                    <input type="text" name="title" id="a1" placeholder="NAME" required />
                    <input type="text" name="name" id="a2" placeholder="DATE OF BIRTH" required />
                    <input type="number" name="Mob_no" id="a3" placeholder="MOBILE NUMBER" required />
                    <input type="text" name="phone_number" id="a4" placeholder="ADDRESS" required />
					<input type="text" name="Email" id="a5" placeholder="EMAIL ID" required />
					<input type="text" name="User_nm" id="a6" placeholder="USER NAME" required />
					<input type="password" name="password" id="a7" placeholder="PASSWORD" required />
                    <!--<div class="select-list">
                        <select name="course_type" id="course_type">
                            <option slected value="">Course Type</option>
                            <option value="society">Society</option>
                            <option value="language">Language</option>
                        </select>
                    </div>-->
                </div>
                <!--<div class="form-group-2">
                    <h3>How would you like to bo located ?</h3>
                    <div class="select-list">
                        <select name="confirm_type" id="confirm_type">
                            <option seleected value="">By phone</option>
                            <option value="by_email">By email</option>
                        </select>
                    </div>
                    <div class="select-list">
                        <select name="hour_appointment" id="hour_appointment">
                            <option seleected value="">Hours : 8am 10pm</option>
                            <option value="9h-11h">Hours : 9am 11pm</option>
                        </select>
                    </div>
                </div>-->
               <!-- <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>-->
               
                    <input type="button" name="submit" id="a8" class="submit" value="SUBMIT" /><br>
                    
            </form>
			</center>
        </div>
		</div>

    </div>

    <!-- JS -->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="js2/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>