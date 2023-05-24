<?php
include_once 'connection.php';
//error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
  <title>All Controls Form</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script src="js/form.js"></script>    
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

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-primary"><b>SIGN-UP</b></p>
                  <p id=success class="text-success bg-success"></p>
                  <p id=error class="text-danger bg-danger"></p>
                  <form class="mx-1 mx-md-4" method="post" enctype="multipart/form-data" onsubmit="return jsvalidation()">
                   
                    <div class="d-flex flex-row align-items-center mb-4">
                     <i class="glyphicon glyphicon-user"></i> <label class="form-label" for="name" >Your Name</label>
                     <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" placeholder="Enter your name" name="username" class="form-control" autocomplete="off"  /><small style="color: red;font-weight: bold;" id="sname"> </small>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-envelope"></i> <label class="form-label" for="email">Your Email</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" autocomplete="off"  /><small style="color: red;font-weight: bold;" id="semail"> </small>
                    </div>
                  </div> 


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-phone"></i> <label class="form-label" for="number">Mobile NO</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" id="number1" name="number" placeholder="Enter mobile number" class="form-control" autocomplete="off" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-lock"></i>  <label class="form-label" for="pass1">Password</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="pass1" name="pass1" placeholder="Enter password" class="form-control" autocomplte="off" /><small style="color: red;font-weight: bold;" id="spass1"> </small>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-lock"></i> <label class="form-label" for="pass2" autocomplte="off">Repeat your password</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="pass2" name="pass2" placeholder="Enter repeat password" class="form-control" /><small style="color: red;font-weight: bold;" id="spass2"> </small>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <i class="glyphicon glyphicon-th"></i> <label class="form-label" for="dob">Date Of Birth</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="dob" name="dob" class="form-control"  autocomplete="off" required />
                      
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-home"></i> <label class="form-label" for="address">Address</label>
                    <div class="form-outline flex-fill mb-0">
                      <textarea name="address" cols="75" rows="5" placeholder="Enter address" class="form-control rounded-0" id="address" required ></textarea>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="glyphicon glyphicon-user"></i> <label class="form-label" for="gender">Gender</label>
                    <div class="form-outline flex-fill mb-0">
                      <input type="radio" id="male" name="gender" value="male" class="form-check-input"/> <label class="form-label" for="male">male</label>
                      <input type="radio" id="female" value="female" name="gender" required class="form-check-input" /> <label class="form-label" for="female">female</label>
                      <input type="radio" id="other" value="other" name="gender" class="form-check-input" /> <label class="form-label" for="other">other</label>
                      
                    </div>
                  </div>
                  


                  <!-- sql countries are work here  -->


                  <div>
                    <?php 
                    $countries="SELECT * from countries order by countries";
                    $res=mysqli_query($con,$countries);
                    ?>
                    <i class="glyphicon glyphicon-flag"> </i><label for="countrydd"><b> Country :</b></label><br><br>
                    <select id="countrydd" onchange="changeFunction()">
                      <option selected hidden > select countries </option>
                      <?php
                      while($row=mysqli_fetch_array($res)){
                       echo $row['countries'];
                       ?>

                       <option value="<?php echo $row['id'] ?>"> <?php echo $row['countries']?> </option>

                     <?php } ?>

                   </select>
                   
                 </div>
                 <div>
                  
                   <i class="glyphicon glyphicon-screenshot"></i><label > State :</label>
                   <div id="state1">
                    <select >
                      <option selected hidden>Select a states</option>
                    </select>
                  </div>
                  
                </div>
                <div>
                  
                  <i class="glyphicon glyphicon-map-marker"></i>   <label > City :</label>
                  <div id="city">
                    <select >
                      <option selected hidden>Select a city</option>
                    </select>
                  </div>
                  
                </div>

                <script type="text/javascript">
                  function changeFunction(){
                    var xmlr=new XMLHttpRequest();
                    xmlr.open("GET","ajax.php?country="+document.getElementById("countrydd").value,false);
                    xmlr.send(null);
                    
                    document.getElementById('state1').innerHTML=xmlr.responseText;
                    
                  }
                  function statefun(){
                    var xmlr=new XMLHttpRequest();
                    xmlr.open("GET","ajax.php?stateid="+document.getElementById("statedd").value,false);
                    xmlr.send(null);
                    
                    document.getElementById('city').innerHTML=xmlr.responseText;
                  }
                  
                </script>
                


                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="glyphicon glyphicon-heart"></i> <label class="form-label" for="select">Choose Your Favorite Programming Language</label>
                  <div class="form-outline flex-fill mb-0">
                    <select id="select" name="course" class="col-md-12" class="form-select" aria-label="Default select example"  class="form-control" >
                      <option selected hidden>please select any one</option>
                      <option value="c program">c</option>
                      <option value="c++ program">c++</option>
                      <option value="java">java</option>
                      <option value="python">python</option>
                    </select>
                    
                  </div>
                </div>

                <div class="d-flex flex-row align-items-center mb-4">
                  <i class="glyphicon glyphicon-education"></i> <label class="form-label" for="select1">Education Level</label>
                  <div class="form-outline flex-fill mb-0">
                   <select id="select1" name="education[]" class="col-md-12" class="form-select" aria-label="Default select example"  class="form-control" multiple >
                    <option value="10th">10th</option>
                    <option value="12th">12th</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                    <option value="other">other</option>
                  </select>
                  
                </div>
              </div>
              
              <div class="form-check d-flex justify-content-center mb-5" >
                <i class="glyphicon glyphicon-star"></i> <label class="form-label"> Hobbies</label><br>
                <input class="form-check-input me-4" type="checkbox" name="hobies[]" value="music" id="music" />

                <label class="form-check-label" for="music">
                 hearning music
               </label>
               <input class="form-check-input me-4" type="checkbox" name="hobies[]" value="play" id="play" />
               <label class="form-check-label" for="play">
                 playing
               </label>
               <input class="form-check-input me-4" type="checkbox" name="hobies[]" value="tv" id="tv" />
               <label class="form-check-label" for="tv">
                watching tv
              </label>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
              <i class="glyphicon glyphicon-download-alt"></i> <label class="form-label" for="file">Upload Your File</label>
              <div class="form-outline flex-fill mb-0">
                <input type="file" id="file" name="file" class="form-control"  autocomplete="off" required />
                
              </div>
            </div>
            
            <div class="form-check d-flex justify-content-center mb-5">
              <input class="form-check-input me-2" type="checkbox" value="accept" name="check" id="checkbox" />
              <label class="form-check-label" for="checkbox">
                I agree all statements in <a href="termsandpolies.php">Terms of service</a>
              </label><br>
              <b><span>If You Have Account Already <span><a href="signin.php">click here!</a></span></span></b>
            </div>

            <div>
              <button id="addTable">STORE RECORD ANOTHER TABLE</button>
            </div>


            
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <button type="submit" onclick="submitdata()" name="submit" class="btn btn-success btn-md">Register</button>
              <button type="reset" name="reset" class="btn btn-info btn-md">Reset</button>
              <button type="button" name="viewdatabase" class="btn btn-primary btn-md" onclick="viewdb()">View Database</button>
            </div>
            

          </form>
        </div>
        

        <script type="text/javascript">
         function viewdb(){
          window.location.href="databasetable.php";
        }
      </script>    
      <?php
      if(isset($_POST['submit']))
      {

        
          //echo $_FILES["file"];
          //print_r( $_FILES["file"]);
          $filename= $_FILES["file"]["name"];  //here ['file'] is a name of the file and ['name'] is $_FILE generate name.same as temp.
          $tempname= $_FILES["file"]["tmp_name"];
          $folder="testdoc/".$filename;
          //echo $folder;
          if(file_exists("testdoc/".$filename))
          {
            echo "<script>alert('This file is already exist please choose another file or rename the file.')</script>";
            exit;
          }
          else{
            move_uploaded_file($tempname,$folder);
            //echo "your file upload successfully";
          }
          

          $username=$_POST['username'];
          $email=$_POST['email'];
          $phone=$_POST['number'];
          $pass1=$_POST['pass1'];
          $orignalpassword=$pass1;
          $hash_pass1=md5($pass1);
          $pass2=$_POST['pass2'];
          $hash_pass2=md5($pass2);
          $dob=$_POST['dob'];
          $address=$_POST['address'];
          $gender=$_POST['gender'];
          $program=$_POST['course'];
          $education=$_POST['education'];
          $hobies=$_POST['hobies'];
          $file=$_FILES['file']['name'];
          $agree=$_POST['check'];
            $hobie=implode(",",$hobies);//for , use
            $edu=implode(",", $education);
            
            $sql="INSERT INTO signup(username,email,mobile,orpass,pass1,pass2,dob,address,gender,fav,education,fav1,fileupload,agree) VALUES('$username','$email',$phone,'$orignalpassword','$hash_pass1','$hash_pass2','$dob','$address','$gender','$program','$edu','$hobie','$file','$agree')";
            
            /*if (md5($pass1)==$hash_pass1) {
              echo "your are right user";
              # code...
            }*/
            if($con->query($sql))
            {
             echo '<script>document.getElementById("success").innerHTML="Inserted Successfully"</script>';
             

           }
           else{
            echo '<script>document.getElementById("error").innerHTML="Data Inserted Failed"</script>';
            
          }
        }
        else{
           // echo "please enter all the details";
        }




        ?>
        <br>
        <div class="col-md-12 col-lg-6 col-xl-7 d-flex  order-1 order-lg-2">
          <br>
          <br>
          
          
          <form id="secoundform" autocomplete="off" style="display: none;">
            <h3><b>Stored In Another Table:</b></h3>
            <div class=' col-md-12'>
              <label>Name:</label>
              <input class="sinput" placeholder="name" type="text" id="sname1" name='sname'>
              
              <label>Age:</label>
              <input class="sinput" placeholder="age" type="number" id="sage1" name="sage">
            </div>
            <br><br><br>
            <center>
              <button  type="button" id='sbtn' onclick="adddata()" name="secoundsubmit" class="btn-primary ">ADD</button>

            </center>
            
          </form>
          <script type="text/javascript">
            $(document).ready(function(){
              $('#addTable').click(function(){
                $('#secoundform').show();
              })
            })
          </script>
          <br>
          <br>
          <table border="3px solid black"  id="datatable" class="table table-bordered border-dark table-striped table-condensed table-hover text-center col-md-12 col-sm-5 col-xs-3" style="display: none;padding: 25px;">
            <tr>
              <th class="th">NAME</th>
              <th class="th">AGE</th>
            </tr> </table>

            <script type="text/javascript">
              function adddata(){
                var name=document.getElementById("sname1").value;
                var age=document.getElementById("sage1").value;
                if(name && age){
                  var table=document.getElementById("datatable");
                  var row=table.insertRow(-1);
                  var cell1=row.insertCell(0);
                  var cell2=row.insertCell(1);
                  cell1.innerHTML=name;
                  cell2.innerHTML=age;
                  document.getElementById("sname1").value="";
                  document.getElementById("sage1").value="";
                  table.style.display = 'table';
                }else{
                  alert('please enter both name and age');
                }

              }
              function submitdata(){
                var table=document.getElementById('datatable');
                var data=[];
                for(var i=1;i<table.rows.length;i++){
                  var row=table.rows[i];
                  var name=row.cells[0].innerHTML;
                  var age=row.cells[1].innerHTML;
                  data.push({name:name,age:age});
                }
                var xhr= new XMLHttpRequest();
                xhr.open('POST','ajax.php',true);
                xhr.setRequestHeader('Content-Type','application/json:charset=UTF-8');
                xhr.onreadystatechange=function(){
                  if (xhr.readyState===XMLHttpRequest.DONE && xhr.status===200){
                    alert(xhr.responseText);
                  }

                };
                xhr.send(JSON.stringify(data));
              }
              document.getElementById('datatable').style.display = 'none';
              
            </script>

            <div id="datacontainer"></div>
            
            <style type="text/css">
             .sinput{
              border:1px solid black;
              border-radius:10px;

              
            }
            
            #sbtn{
              border-radius: 10px;
            }
            #sbtn1{
              border-radius: 10px;
            }
          </style>

          
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