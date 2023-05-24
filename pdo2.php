<?php
include 'pdo.php';
var_dump($db);
	foreach ($db ->query('SELECT * from usertable' ) as $row) {
	echo $row['username']." - ".$row['location']." - ".$row['gender']."<br>";
	echo htmlentities($row['username'])." - ".htmlentities($row['location'])." - ".htmlentities($row['gender'])."<br>";
	}

	//fetch method
	$stmt=$db->query("SELECT * from usertable");
	while($row3=$stmt->fetch(PDO::FETCH_BOTH)){
		echo "<pre>".var_dump($row3)."</pre>";
	}
	//fetch all method
	$stat1=$db->query("SELECT * from usertable");
    $result=$stat1->fetchAll();
   foreach($result as $row){
   	$username=htmlentities($row['username']);
   	$loc=htmlentities($row['location']);
   	echo $username."-".$loc."<br>";
   }
   //prepare statement with placeholder
   $stat4=$db->prepare("SELECT * from usertable where username LIKE ?");
   $stat4->bindvalue(1,'k%');
   $stat4->execute();
  while($row4=$stat4->fetch(PDO::FETCH_ASSOC)){
		$name=$row4['username'];
		$loc=$row4['location'];
		echo $name.$loc."<br>";
	}


 //insert update and delete
	$ins=$db->prepare("INSERT into usertable(username,location,gender) values (:username,:location,:gender)");
	$ins->bindValue(':username','rajen');
	$ins->bindValue(':location','chennai');
	$ins->bindValue(':gender','male');
	$ins->bindValue(':username','raji');
	$ins->bindValue(':location','chennai');
	$ins->bindValue(':gender','female');
	$ins->execute();


//delete
$del=$db->prepare("DELETE from usertable where username=:username");
$del->bindValue(':username','krishna');
$del->execute();
	
//update
$upd=$db->prepare("UPDATE usertable set location=:location where username=:firstname");
$upd->bindValue(':firstname','celsi');
$upd->bindValue(':location','annamagalam');
$upd->execute();
?>