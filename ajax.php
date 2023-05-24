<?php
include_once 'connection.php';
error_reporting(0);

$country=$_GET["country"];
$stateid=$_GET["stateid"];
$name=$_POST["name"];
$fage=$_POST["fage"];


if($country!="")
{
$res=mysqli_query($con,"SELECT * from states where cid=$country ORDER BY states ");
echo "<select id='statedd' onchange='statefun()'>";

while($row1=mysqli_fetch_array($res)){
	
	echo "<option value=$row1[id]>"; 
	echo $row1['states'];
	echo "</option>";
}
echo "</select>";
}
if($stateid!="")
{
$res=mysqli_query($con,"SELECT * from cities where sid=$stateid ORDER by city");
echo "<select >";
	
while($row1=mysqli_fetch_array($res)){
	echo "<option value=$row1[id]>"; 
	echo $row1['city'];
	echo "</option>";
}
echo "</select>";
}

$data=json_decode(file_get_contents("php://input"),true);
foreach($data as $row2){
$name=$row2['name'];
$age=$row2['age'];
$sql="INSERT into secoundtable (uname,age) values ('$name','$age')";
if($con->query($sql)===TRUE){
  echo "Your Record is Submitted Successfully";
}
else{
	echo "Error:".$sql."<br>".$con->error;
}
}

mysqli_close($con);
?>