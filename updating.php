<?php

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_POST['fName'])) {
		$fName=$_POST['fName'];
	}
	if (isset($_POST['pict'])) {
		$pict = $_POST['pict'];
	}
	if (isset($_POST['points'])) {
		$points = $_POST['points'];
	}
		
	//add connection
	include ("connection.php");
	
	$query="UPDATE `teams` SET 
		`name`='$name',
		`fullName`='$fName',
		`points`='$points',
		`picture`='$pict' 
		WHERE `teamId`=$id";
		
	$result = mysqli_query($conn,$query);
	if ($result==TRUE) {
		echo 'ok';
	}else{
		echo "ERROR!";		
	}

?>