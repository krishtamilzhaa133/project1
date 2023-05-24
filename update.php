<?php
include_once 'connection.php';
error_reporting(0);
$id=$_GET['id'];
/*$upselect="SELECT id,username,email,mobile,pass1,pass2,dob,
address,gender,fav,education,fav1,fileupload,agree from signup where id=$id";*/
$upselect="SELECT * from signup where id=$id";
$res=mysqli_query($con,$upselect);
$numrow=mysqli_num_rows($res);
//print_r($numrow);


?>

<!DOCTYPE html>
<html>
<head>
  <title>All Controls Form</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    
</head>
<body style="background-color:#D6EAF8 ">
<section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-primary"><b>UPDATE</b></p>
<p id=success class="text-success bg-success"></p>
<p id=error class="text-danger bg-danger"></p>
   <?php if($numrow>0){
     $row=mysqli_fetch_array($res);
      //print_r($row);
     $hobies1=$row['fav1'];  
     $hobies2=explode(",", $hobies1);
     $agree=$row['agree'];
     $agree1=explode(",", $agree);
     $education=explode(",", $row['education']);
     // print_r($education);
     $file=$row['fileupload'];      
    ?>
    <form class="mx-1 mx-md-4" method="post">
     
      <div class="d-flex flex-row align-items-center mb-4">
       <i class="glyphicon glyphicon-user"></i> <label class="form-label" for="name" >Your Name</label>
         <div class="form-outline flex-fill mb-0">
          <input type="text" id="name" name="username" value="<?=$row['username']?>" class="form-control" autocomplete="off" required />
            </div>
      </div>

      <div class="d-flex flex-row align-items-center mb-4">
        <i class="glyphicon glyphicon-envelope"></i> <label class="form-label" for="email">Your Email</label>
          <div class="form-outline flex-fill mb-0">
              <input type="email" id="email" name="email" class="form-control" value="<?=$row['email'] ?>" autocomplete="off" required  />
                </div>
      </div> 


          <div class="d-flex flex-row align-items-center mb-4">
        <i class="glyphicon glyphicon-phone"></i> <label class="form-label" for="number">Mobile NO</label>
           <div class="form-outline flex-fill mb-0">
              <input type="number" id="number" name="number" class="form-control" autocomplete="off" value="<?php echo $row['mobile'] //also do this type ?>" required  /> 
                </div>
      </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-lock"></i>  <label class="form-label" for="pass1">Password</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="pass1" name="pass1" class="form-control" value="<?=$row['pass1'] ?>" required/>
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-lock"></i> <label class="form-label" for="pass2">Repeat your password</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="pass2" name="pass2" class="form-control" value="<?=$row['pass2'] ?>" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-th"></i> <label class="form-label" for="dob">Date Of Birth</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="dob" name="dob" class="form-control" value="<?=$row['dob'] ?>"  autocomplete="off" required />
                      
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-home"></i> <label class="form-label" for="address">Address</label>
                    <div class="form-outline flex-fill mb-0">
                      <textarea  name="address" cols="75" rows="3" class="form-control rounded-0" required id="address" ><?php echo $row['address'] ?></textarea>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-user"></i> <label class="form-label" for="gender">Gender</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="radio" id="male" name="gender" value="male" class="form-check-input" 
                     <?php
                     if($row['gender']=='male'){
                      echo "checked";

                     }?>
                      /> <label class="form-label" for="male">male</label>
                      <input type="radio" id="female" value="female"
                      <?php
                     if($row['gender']=='female'){
                      echo "checked";

                     }?> name="gender" class="form-check-input"  /> <label class="form-label" for="female">female</label>
                      <input type="radio" id="other" value="other" name="gender"
                      <?php
                     if($row['gender']=='other'){
                      echo "checked";

                     }?>

                class="form-check-input" /> <label class="form-label" for="other">other</label>
                      
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-heart"></i> <label class="form-label" for="select">Choose Your Favorite Programming Language</label>
                    <div class="form-outline flex-fill mb-0">
                      <select  id="select" name="course" class="col-md-12" class="form-select" aria-label="Default select example"  class="form-control" >
                                <option value="none" 
                                <?php
                     if($row["fav"]=='none'){
                      echo "selected";

                     }?> >please select any one</option>
                              <option value="c program" <?php
                     if($row["fav"] =='c program'){
                      echo "selected";

                     }?>>c</option>
                              <option value="c++ program" <?php
                     if($row["fav"] =='c++ program'){
                      echo "selected";

                     }?>>c++</option>
                              <option value="java" <?php
                     if($row["fav"] =='java'){
                      echo "selected";


                     }?>
                     >java</option>
                                <option value="python" <?php
                     if($row["fav"]=='python'){
                      echo "selected";

                     }?>
                     >python</option>
                            </select>
                      
                    </div>
                  </div>

                   <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-education"></i> <label class="form-label" for="select1">Education Level</label>
                    <div class="form-outline flex-fill mb-0">
                     <select id="select1" name="education[]" class="col-md-12" class="form-select" aria-label="Default select example"  class="form-control" multiple >
                      
                        <option value="10th" <?php
                        if(in_array('10th',$education))
                    {
                          echo "selected";
                      }

                         ?>>10th</option>
                    
                      

                     <option value="12th" <?php
                        if(in_array('12th',$education))
                    {
                          echo 'selected';
                      }

                         ?>>12th</option>
                       <option value="UG"<?php
                        if(in_array('UG',$education))
                    {
                          echo 'selected';
                      }

                         ?>>UG</option>
                     
                     <option value="PG" <?php
                        if(in_array('PG',$education))
                    {
                          echo 'selected';
                      }

                         ?>>PG</option>
                   <option value="other" <?php
                        if(in_array('other',$education))
                    {
                          echo 'selected';
                      }

                         ?>>other</option>
                          </select>
                      
                    </div>
                  </div>
                 
                  <div class="form-check d-flex justify-content-center mb-5" >
                    <i class="glyphicon glyphicon-star"></i> <label class="form-label"> Hobbies</label><br>
                    <input class="form-check-input me-4" type="checkbox"  id="music" name="hobies[]" value="music" 
                    <?php
                    if(in_array('music',$hobies2))
                    {
                      echo "checked";
                    }
                    ?>
                   
                     />

                    <label class="form-check-label" for="music">
                     hearning music
                    </label>
                    <input class="form-check-input me-4" type="checkbox" name="hobies[]" value="play"
                    <?php
                    if(in_array('play',$hobies2))
                    {
                      echo "checked";
                    }
                    ?> id="play" />
                    <label class="form-check-label" for="play">
                     playing
                    </label>
                    <input class="form-check-input me-4" type="checkbox" name="hobies[]" value="tv"
                    <?php
                    if(in_array('tv',$hobies2))
                    {
                      echo "checked";
                    }
                    ?>
                     id="tv" />
                    <label class="form-check-label" for="tv">
                    watching tv
                    </label>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-download-alt"></i> <label class="form-label" for="file">Upload Your File</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      <input type="file" id="file" name="file" class="form-control"
                      autocomplete="off"/><span><?php echo $row['fileupload']?></span>
                      
                      
                    </div>
                  </div>
                            
                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="accept" name="check" id="checkbox" <?php
                    if(in_array('accept',$agree1))
                    {
                      echo "checked";
                    }
                    ?> />
                    <label class="form-check-label" for="checkbox">
                      I agree all statements in <a href="terms and polies.html">Terms of service</a>
                    </label>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="update"  class="btn btn-success btn-md">Update</button>

                    <button type="button" name="signup" onclick="loginform()" class="btn btn-info btn-md">Sign-up</button>
                     <button type="button" name="viewdatabase" class="btn btn-primary btn-md" onclick="viewdb()">View Database</button>
                  </div>
                  <br>


                </form>
                

              <?php } ?>
 </div>
           <script>
              function loginform() {
                   window.location.href = "index.php";
                } 

              function viewdb(){
                   window.location.href="databasetable.php";
                }     
            </script> 
      <?php
          if(isset($_POST['update']))
          {
            $username=$_POST['username'];
            $email=$_POST['email'];
            $phone=$_POST['number'];
            $pass1=$_POST['pass1'];
            $temp=$pass1;
            $hash_pass1=md5($pass1);
            $pass2=$_POST['pass2'];
            $hash_pass2=md5($pass2);
            $dob=$_POST['dob'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $program=$_POST['course'];
            $education=$_POST['education'];
            $hobies=$_POST['hobies'];
            $file=$_POST['file'];
            $agree=$_POST['check'];
            $hobie=implode(",",$hobies);//for , use
            $edu=implode(",", $education);
           
       $update="UPDATE signup set username='$username',email='$email',mobile=$phone,orpass='$temp',pass1='$hash_pass1',pass2='$hash_pass2',dob='$dob',address='$address',gender='$gender',fav='$program',education='$edu',fav1='$hobie',fileupload='$file',agree='$agree' where id='$id'";
            
            if($con->query($update))
            {
               echo '<script>document.getElementById("success").innerHTML="Update Successfully"</script>';

            }
            else{
              echo '<script>document.getElementById("error").innerHTML="Data Update Failed"</script>';
  
            }
          }
          else{
           // echo "please enter all the details";
          }




      ?>
      
              <br>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex  order-1 order-lg-2">
                
               
              
           
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>