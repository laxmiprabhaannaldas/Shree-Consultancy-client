<?php
include("Config1.php");
$x=$_POST['name'];
$x1=$_POST['date'];
$x2=$_POST['Mob'];
$x3=$_POST['Address'];
$x4=$_POST['Email'];
$x5=$_POST['Uname'];
$x6=$_POST['password'];
if(strlen($x2)!=10 )
{
echo "incorrect Mobile no...";	
}
if(strlen($x6)>10)
{
echo "incorrect  password. Password length should be less than 10";
}

if(strlen($x2)==10 && Strlen($x6)<10)
{
$s="insert  into tbl_registration(Name,Date_birth,Mob_no,Address,Email,U_name,Password) values('$x','$x1','$x2','$x3','$x4','$x5','$x6')";
    if(mysqli_query($con,$s))
    {
	echo "inserted successfully..";
    }
	else
	{
		echo mysqli_error($con);
	}


    
}	


?>