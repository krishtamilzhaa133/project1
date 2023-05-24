<?php
$con=mysqli_connect('localhost','root','root','workout');
if($con->connect_errno)
{
	echo $con->connect_errno;
	die();
}
else 
{
	//echo "database connected successfully";
}
?>
