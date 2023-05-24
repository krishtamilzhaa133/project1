<?php
include_once 'connection.php';
$result=mysqli_query($con,"SELECT * FROM signup where hide=1");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATABASE INFORMATION</title>
		 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/form.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
          <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>
<body>
<h2 class="table-hover text-center" style="color: red;"><b>DATABASE INFORMATION</b></h2>
            <div class="table-responsive ">
                <table id="table1" class="table table-bordered table-striped table-condensed table-hover text-center col-md-12 col-sm-5 col-xs-3">
                  <tr><th>S_NO</th><th>USER_ID</th><th>USER_NAME</th><th>EMAIL</th><th>MOBILE_NO</th><th>PASSWORD</th>
                  <th>CONFORM_PASSWORD</th>
                <th>DATE_OF_BIRTH</th>
              <th>ADDRESS</th>
            <th>GENDER</th>
          <th>FAV_PROGRAM</th>
           <th>EDUCATION</th>
          <th>HOBBIES</th>
          <th>FILE</th>
          <th>TERMS</th>
          <th>VIEW</th>
          <th>VIEW_BUTTON</th>
      <th>EDIT/UPDATE</th>
      <th>DELETE</th>
</tr>
      <?php
      $sn=1;
      while($row=mysqli_fetch_array($result)){
      ?>
      <tr>
      	<td><?php echo $sn ; ?>  </td>
        <td><?php echo $row["id"]; ?>  </td>
        <td><?php echo $row["username"]; ?>  </td>
        <td><?php echo $row["email"]; ?>  </td>
        <td><?php echo $row["mobile"]; ?>  </td>
        <td><?php echo $row["pass1"]; ?>  </td>
        <td><?php echo $row["pass2"]; ?>  </td>
        <td><?php echo $row["dob"]; ?>  </td>
        <td><?php echo $row["address"]; ?>  </td>
        <td><?php echo $row["gender"]; ?>  </td>
        <td><?php echo $row["fav"]; ?>  </td>
        <td><?php echo $row["education"]; ?>  </td>
        <td><?php echo $row["fav1"]; ?>  </td>
        <td><?php echo $row["fileupload"]; ?>  </td>
        <td><?php echo $row["agree"]; ?>  </td>
        
         <td><a class="btn btn-primary" href="view.php?id=<?php echo $row['id'];?>">view</a>
         	</div></td>
         	<td><button class='view-button' data-id="<?php echo $row['id'];?>">view button</button></td>
        <td><a class="btn btn-success" type="submit" href="update.php?id=<?php echo $row['id']; ?>
          ">edit/update</a></td>

          <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>

      </tr>
      <?php
    $sn++;
    }
      ?>
                </table>

               

 <!-- Modal  -->
<div class="modal" id="myModal1">
  <div class="modal-dialog modal-dialog-scrollable" >
    <div class="modal-content">

               
                
      <!-- Modal Header -->
      <div class="modal-header">
        <h2 class="modal-title" style="color: red;">VIEW INFORMATION:</h2>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="close">Close</button>
      </div>

    </div>
  </div></div></div>
            </div>
            <script type="text/javascript">
            	$(document).ready(function(){
            		$(".view-button").click(function(){
            			var id=$(this).data('id');
            			$.ajax({
            				url:'getdata.php',
            				type:'GET',
            				data:{ id :id } ,
            				success: function(response){
            					$('.modal-body').html(response);
            					$('.modal').show();
            				}
            			});
            		});
            		$('.close').click(function(){
            			$('.modal').hide();
            		});
            	});
            </script>
            
            <div align="center">
                    <button  type="button" class="btn btn-light" onclick="document.location.href='index.php'" >click to go sign-up page</button>
            
               </div>


               
</body>
</html>