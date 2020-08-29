<?php
include("Config1.php");

$x=$_POST['Date1'];
$s="select * from tbl_service where status='active'";
$r=mysqli_query($con,$s);
$response="-------Select--------";
while($res=mysqli_fetch_array($r))
{
	
  $response.="<option value='$res[0]'>".$res[1]."</option>";
}
echo $response;




?>
