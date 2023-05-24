<?php

include_once 'connection.php';
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  //echo $id;
  $sql="UPDATE signup SET hide=false WHERE id=$id";
  mysqli_query($con,$sql);
  //echo " Your Record Hasa Been Deleted Successfully";
}
//$sql="SELECT * from signup where hide=true";
//$result =mysqli_query($con,$sql);
?>
<?php if($id>=1){?>
<!DOCTYPE html>
<html>
<head>
  <title>DELETE</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  
</head>
<body style="background-image: url(images/delete.jpg);">
<link rel="stylesheet" type="text/css" href="css/form.css">
<div class="text-danger bg-warning font-weight-bold text-center " ><h3>Your Record Has Been Deleted Successfully</h3>
</div>
<center><div><button type="button" name="signup" onclick="database()" class="btn btn-info btn-success ">Go to DATABASE</button></div></center>
<script>
              function database() {
                   window.location.href = "databasetable.php";
                }      
                </script> 
      
      
</body>
</html>
<?php } ?>
