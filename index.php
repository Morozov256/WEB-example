<?php
	//require_once('../php/checkreg.php'); 
	session_start();
?>
<html>
<head>
	<!--Favicon for all browsers!-->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Link to style file: !-->
	<link rel="stylesheet" href="css/CSSstyle.css">
	<!-- Link to script file: !-->
	<!-- Library Jquery: !-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="nameSite">
		<h3>Formula 1 Teams / Season 2019</h3>
	</div>
	<nav id="login_menu">
		<ul>
			<form>
				<li class="form_label"><a id="uname_msg">Username: </a></li>
				<li ><input class="form_field" id="uname_fld" type="text" name="uname" size="30" maxlength="20" /></li>
				<li class="form_label"><a id="pswd_msg">Password: </a></li>
				<li ><input class="form_field" id="pswd_fld" type="password" name="pswd" size="30"/></li>
				<li><input class="form_button" 
					id="login_btn" 
					type="button" 
					value="Log In"/></li>
			</form>
			<li id="toRight"><input class="form_button" 
				id="reg_btn" 
				type="button"  
				
				value="Register"/></li>
		</ul>
	</nav>
	<div>
		<div class="position">
			<div class="errMsg" id="alrm">
			</div>
		</div>
		<img class="imgStart" id="back_img" src="content/start.jpg" alt="Workplace">
	</div>
	<div class="filler">
	</div>
	<footer>
		<ul>
			<li class="listWide">
				<a class="name">F1 teams</a>
				<a class="comment">All what you want to know!</a>
			</li>
			<li class="listThin">
				<a class="button bottomMenu" href="#home">ABOUT US</a>
				<a class="button bottomMenu" href="#home">CONTACTS</a>
				<a class="button bottomMenu" href="#home">FORUM</a>
			</li>
			<li class="listThin">
				<a class="button bottomMenu" href="#home">PARTNERS</a>
				<a class="button bottomMenu" href="#home">PROJECTS</a>
				<a class="button bottomMenu" href="#home">NAVIGATION</a>
			</li>
			<li class="listWide">
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
				<div class="social facebook">
					<a href="https://www.facebook.com/vaniercollege/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>    
				</div>
				<div class="social instagram">
					<a href="https://www.instagram.com/vaniervtv/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
				</div>
				<div class="social twitter">
					<a href="https://twitter.com/vaniercollege" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				</div>
				<div class="social linkedin">
					<a href="https://www.linkedin.com/school/vanier-college/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
				</div>
			</li>
		</ul>
	</footer>
</body>
</html>
<script src="js/index.js"></script>