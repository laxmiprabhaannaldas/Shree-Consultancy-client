<?php
session_start();
include("Config1.php");
$i="";
$ad=$_POST['a1'];
$pass=$_POST['a2'];
$s="select * from tbl_registration where U_name='$ad' and Password='$pass'";
$r=mysqli_query($con,$s);
while($res=mysqli_fetch_array($r))
{
 $i=$res[0];
}
if($ad=="" || $pass=="")
{
	echo "Fill Fields correctly..";
}

 if($i>0)
 {
	 $_SESSION['uid']=$i;
	 //header("location:jappointment.php");
    echo("success");
 }
 else
 {
 echo("Log in failed");
 }

?>