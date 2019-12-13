<?php
	session_start();

	$errorMsg="";
	if (isset($_POST['uname'])) {
		$login = $_POST['uname'];
	}
	if (isset($_POST['pswd'])) {
		$password=$_POST['pswd'];
	}
	//prepaire values
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$login = trim($login);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
	$password = trim($password);
	
	//add connection
	include ("connection.php");

	$query="SELECT * FROM `users` WHERE `name`='$login'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);

	if (!empty($row['hashPassword'])) {
		
		if ($row['password']==$password) {
			//start session
			$_SESSION['login']=$row['name'];
			$_SESSION['id']=$row['userId'];
			echo 'test!!!';
		}else{
			echo"User or Password is not correct";
		}
	}else{
		echo "User or password is not correct";
	}
?>