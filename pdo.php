<?php

try{
	$db=new PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','root');
	
}
catch(Exception $e){
	echo $e->getMessage();
}
?>
