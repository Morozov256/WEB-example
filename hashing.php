<?php
		//hashing password
		function hashPassword($pass){
			$hashPswd=password_hash($pass, PASSWORD_DEFAULT);
			return $hashPswd;
		}
		
?>