<?php
include_once 'connection.php';
//error_reporting(0);
$id=$_GET['id'];
$sql="SELECT * from signup where id=$id";
$result=$con->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_assoc();
	
           	
          
?>
<!DOCTYPE html>
<html>
<head>
	<title>none</title>
</head>
<body>
<table border="1px solid black;" align="center">
	        <tr><td>ID</td><td><?php echo $row["id"]; ?></td></tr> 
	        <tr><td>NAME</td><td><?php echo $row["username"]; ?> </td></tr>
           	<tr><td>EMAIL</td><td><?php echo $row["email"]; ?></td></tr>
           	<tr><td>MOBILE</td><td><?php echo $row["mobile"]; ?></td></tr>
           	<tr><td>PASSWORD</td><td><?php echo $row["pass1"]; ?></td></tr>
           	<tr><td>CONFORM PASSWORD</td><td><?php echo $row["pass2"]; ?> </td></tr>
           	<tr><td>D.O.B</td><td><?php echo $row["dob"]; ?></td></tr>
           	<tr><td>ADDRESS</td><td><?php echo $row["address"]; ?> </td></tr>
           	<tr><td>GENDER</td><td><?php echo $row["gender"]; ?></td></tr>
           	<tr><td>FAV PROGRMMING LANGUAGE</td><td><?php echo $row["fav"]; ?> </td></tr>
           	<tr><td>EDUCATION LEVEL</td><td><?php echo $row["education"]; ?> </td></tr>
           	<tr><td>HOBBIES</td><td><?php echo $row["fav1"]; ?></td></tr>
           	<tr><td>FILE</td><td><?php echo $row["fileupload"]; ?></td></tr>
           	<tr><td>AGREEMENT</td><td><?php echo $row["agree"]; ?></td></tr>
</table>
</body>
</html>
           	
<?php

}
$con->close();
?>