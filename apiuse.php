<?php
$con=mysqli_connect('localhost','root','root','bank');

$id=$_GET['id'];
$query="SELECT * From customerrecord where id=$id";
$result=mysqli_query($con,$query);
$row =mysqli_fetch_assoc($result);
print_r($row);
?>