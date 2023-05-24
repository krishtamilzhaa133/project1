<?php
session_start();
$userprofile=$_SESSION['uname'];
if($userprofile==true){

}
else{
  header('location:signin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-inverse navbar-fixed-top">
  
      <div class="navbar-header"><a href="#" class="navbar-brand">KRISHNA</a></div>
      <ul class="nav navbar-nav">
      	<li><a href="home.php">HOME</a></li>
      	<li><a href="branches.php">BRANCHES</a></li>
      	<li><a href="#">CONTACT</a></li>
      	<li><a href="#">ABOUT</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="logout.php"><i class="glyphicon glyphicon-log-in"> </i> Log-out  </a></li>
      	<li><a href="home.php"><i class="glyphicon glyphicon-user"> </i>Home  </a></li>
      </ul>
  </div>
  </div>
  </nav>
 <br>
 <div class="container well">
   <h1 align="center">CONTACT</h1>
   <label>NAME :</label>KRISHNARAJ<br>
   <label>MAIL SEND TO ADMIN :</label><a href="mailto:krishtamilzhaa@gmail.com">CLICK HERE!</a><br>
    <label>MOBILE NO :</label>7868655678   </div>

</div>
 </div>
</body>
</html>
