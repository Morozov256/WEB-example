<?php
	//add config file
	$config=simplexml_load_file('database\config.xml');

	$host=$config->host;
	$user=$config->user;
	$pass=$config->password;
	$dbname=$config->dbname;
	
	//create connection
	$conn = mysqli_connect($host,$user,$pass,$dbname);
?>