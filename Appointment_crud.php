<?php
include("Config1.php");
$x=$_POST['Date1'];
$s="select * from tbl_schedule where S_date='$x'";
$r=mysqli_query($con,$s);
$response="-------Select--------";
while($res=mysqli_fetch_array($r))
{
$response.="<option value='$res[0]'>".$res[2]."</option>";
}
echo $response;


?>
