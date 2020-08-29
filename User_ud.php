<?php
session_start();
include("Config1.php");
$a=$_SESSION["uid"];
$s="select * from tbl_registration where id='$a'";
$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$str=$r[0]."#".$r[1]."#".$r[2]."#".$r[3]."#".$r[4]."#".$r[5]."#".$r[6]."#".$r[7]."#";
		echo $str;

	}
?>