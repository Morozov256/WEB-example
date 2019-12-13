<html>
<?php //include'php/user.php'?>
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
	<div class="filler_nav">
	</div>
	<div id="reg_form">
		<div class="position">
			<form method = "post">
				Username:<br>
				<input class="form_field long" id="uname_reg" type="text" name="login" size="30" />
				email:<br>
				<input class="form_field long" id="email_reg" type="text" name="email" size="30" />
				Password:<br>
				<input class="form_field long" id="pswd_reg" type="password" name="password" size="30"/>
				Repeat password:<br>
				<input class="form_field long" id="rpswd_reg" type="password" name="rptPassword" size="30"/>
				<input class="form_button" 
					id="accept_btn" 
					type="button"  
					value="Register" />
				<input class="form_button" 
					id="csl_btn" 
					type="button"  
					value="Cancel" />
				<div class="errMsg" id="alrm">
				</div>
			</form>
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
<script src="js/registration.js"></script>