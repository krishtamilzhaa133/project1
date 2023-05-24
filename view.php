<?php
include_once 'connection.php';
$id=$_GET['id'];
$sql="SELECT * FROM signup where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>view page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div id="videoset" style="margin-top: -100">
		<video autoplay loop muted plays-inline id="videostyle">
		<source src="video/view.mp4" type="video/mp4"> </video>
			<style type="text/css">
				#videostyle{
					position: absolute;
					margin-top: -200px;
					right: 0;
					z-index: -1;
				}
				@media(min-aspect-ratio:16/9){
					#videostyle{
						width: 100%;
						height:auto;

					}
				}
			   @media(max-aspect-ratio:16/9){
					#videostyle{
						width:auto;
						height:100%;
						
					}
				}
				#divview:hover {
	
					-webkit-text-stroke:2px #fff;
					color: transparent;
					text-decoration-line:overline;
				}

			</style>
			<?php if($row>0){ ?>
	<h3 align="center" style="color:white;margin-top: 200px; " id="divview"><b>VIEW YOUR INFORMATION</b></h3>
	<div align="center" style="margin-top: 20px;">
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
 click view your details<?php
if($row){
	echo "  ".$row['username']." ";
}
mysqli_close($con);
?>
</button>
<?php } 
else{
	echo "your are not authorized person";
}?>


</div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog" .modal-lg>
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="color: red;"><?php echo $row['username']; ?> information:</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
           <table class="table table-bordered table-striped table-hover" style="background-color:white;">
           	<tbody>
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
           	</tbody>
           </table>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="document.location.href='databasetable.php'"  data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>
</body>
</html>
