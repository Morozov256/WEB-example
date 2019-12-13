<?php
	$_SESSION = array();
	
	setcookie(session_name(), "", time() - 3000);

	session_unset();
	session_destroy();
	header("Location: index.php");
?>