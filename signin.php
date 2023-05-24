<?php
session_start();
include_once 'connection.php';
  
        
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign-in</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body style="background-color:#D6EAF8 ">

<section class="vh-100" style="background-color:#D6EAF8 ;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-1 order-lg-1 align-middle">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-primary"><b>SIGN-IN</b></p>

                <form class="mx-1 mx-md-4" method="post">
                  <p id="sinerror" style="color:red;background-color: black;" ></p>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-envelope"></i> <label class="form-label" for="email">Your Email</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" name="email1" class="form-control" autocomplete="off" required />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-lock"></i>  <label class="form-label" for="pass1">Password</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="pass1" id="pass1" class="form-control" required />
                     
                    </div>
                  </div>
                  
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <div class="row"> 
                      <div class="col-md-2 col-sm-2 col-xs-2"> <button type="submit" name="submit" class="btn btn-success btn-md">log-in</button>
                      </div>
                   <div class="col-md-1 col-sm-2 col-xs-2"> <button type="button" class="btn btn-info btn-md"><a id="anchor" href="index.php">sign-up</a></button>
                      </div>
                
                  
                    
                  </div>
                  </div>
                  <br>
                  <br>


                </form>
    <?php
              
  if(isset($_POST['submit']))
          {
        $email=$_POST['email1'];
        $pass1=$_POST['pass1'];
        $pass1=md5($pass1);
        echo $email;
        echo $pass1;
        $email = stripcslashes($email);  
        $pass1= stripcslashes($pass1);  
        $email = mysqli_real_escape_string($con, $email);  
        $pass1= mysqli_real_escape_string($con, $pass1);  
      
        $sql = "SELECT * from signup where email= '$email' and pass1 = '$pass1'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
        $_SESSION['uname']=$email;
        header('Location: home.php');

           exit;
        }  
        else{  
echo '<script>document.getElementById("sinerror").innerHTML="<h4>* please enter correct email or password</h4>"</script>';  
        }     
                      }
                      ?>
              </div>
              <br>
            <!--  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="" width="670px" height="400px" 
                  class="img-fluid" alt="log-in image">

              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>