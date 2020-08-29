<?php
session_start();
include("config1.php");
$id=$_SESSION['uid'];
$des=$_POST['a1'];

$s="insert into tbl_feedback (U_id,Description) values('$id','$des')";

if(mysqli_query($con,$s))
{
   echo "successfully";
}
else
{
   echo mysqli_error($con);
}
?>