<?php
	if (isset($_POST['login'])) {
		$login = $_POST['login'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if (isset($_POST['password'])) {
		$pswd=$_POST['password'];
	}

	//prepare data
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$login = trim($login);
	$email = stripslashes($email);
	$email = htmlspecialchars($email);
	$email = trim($email);
	$pswd = stripslashes($pswd);
	$pswd = htmlspecialchars($pswd);
	$pswd = trim($pswd);

	include ("hashing.php");
	$hash=hashPassword($pswd);
		
	//add connection
	include ("connection.php");
	
	//checking login
	$query="SELECT `userId` FROM `users` WHERE `name`='$login'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	if (empty($row['userId'])) {
		$query="INSERT INTO `users` ( `name`,`password`,`hashPassword`, `email` ) VALUES ('$login','$pswd','$hash','$email')";
		$result = mysqli_query($conn,$query);
		if ($result==TRUE) {
			echo 'ok';
		}else{
			echo "ERROR!";
		}
	}else{
		echo "User name already exist!";
	}
?>