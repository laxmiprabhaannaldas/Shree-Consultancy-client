<?php
session_start();
include("Config1.php");
$a=$_POST["a_id"];
$b=$_POST["s_id"];
$c=$_SESSION["uid"];
$s="insert into tbl_appointment(C_id,S_id,service_id) values('$c','$a','$b')";
if(mysqli_query($con,$s))
{
 echo "Appointment agreed....";
}
else
{
 echo "Appointment failed";
}
?>