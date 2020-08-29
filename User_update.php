<?php
include("Config1.php");
$a=$_POST['x1'];
$b=$_POST['x2'];
$c=$_POST['x3'];
$d=$_POST['x4'];
$e=$_POST['x5'];
$f=$_POST['x6'];
$g=$_POST['x7'];
$h=$_POST['x8'];
$s="update tbl_registration set  Name='$b',Date_birth='$c',Mob_no='$d',Address='$e',Email='$f',U_name='$g',Password='$h' where id='$a'";
if(mysqli_query($con,$s))
{
 echo "Record updated...";
}
else
{
 echo "Record not updated...";
}
?>
