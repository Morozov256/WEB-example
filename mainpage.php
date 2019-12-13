<?php
	session_start();
	
	if(!isset( $_SESSION['login'])){
		header("Location: index.php");
	}
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
		<h3>Formula 1 Teams / season 2019</h3>
	</div>
	<nav id="main_menu">
		<ul>
			<li><a class="button" id="racers_but" href="#contact">Racers</a></li>
			<li><a class="button" id="f1_but" href="https://www.formula1.com" target="_blank">Site F1</a></li>
			<li id="toRight"><a class="button" id="logout_but">LogOut</a></li>
		</ul>
	</nav>
	<nav id="search_menu">
		<ul>
			<li id="toRight"><a class="small button" id="page3t_btn" href="#about">3</a></li>
			<li id="toRight"><a class="small button" id="page2t_btn" href="#about">2</a></li>
			<li id="toRight"><a class="small button" id="page1t_btn" href="#about">1</a></li>
			<li id="toRight">
				<form id="search_form">
					<input type="text" class="form_field long" id="search_fld" placeholder="Search teams..." />
				</form>
			</li>
		</ul>
	</nav>
	<div id="team_list">
		<ul class="list_Teams" id="main_list">
		<?php

			//add config file
			$config=simplexml_load_file('database/config.xml');

			$host=$config->host;
			$user=$config->user;
			$pass=$config->password;
			$dbname=$config->dbname;

			//create connection
			$conn = mysqli_connect($host,$user,$pass,$dbname);
		
			$queryT="SELECT * FROM `teams`";
			$resultT = mysqli_query($conn,$queryT);
		
			while ($rowT=$resultT->fetch_assoc()) {
				echo "<li class=\"border\">";
				echo "<img class=\"imgTeam\" src=\"content/".$rowT["picture"]."\">";
				//invisible sell for ID
				echo "<p class=\"idTeam\">".$rowT["teamId"]."</p>";
				echo "<p class=\"nameTeam\">".$rowT["name"]."</p>";
				
				$queryR="SELECT * FROM `racers` WHERE `teamId`=".$rowT["teamId"];
				$resultR = mysqli_query($conn,$queryR);
				
				while ($rowR=$resultR->fetch_assoc())
						echo "<p class=\"pilot\">".$rowR["firstName"]." ".$rowR["lastName"]."</p>";
	
				echo "<p class=\"pilot\"><span>".$rowT["points"]."</span> points</p>";
				echo "<p><a class=\"button edit\">Edit</a></p>";
				echo "</li>";
			}
		?>
		</ul>
	</div>
	<nav id="list_menu">
		<ul>
			<!--<li id="toRight"><a class="small button" id="page3b_btn" href="#about">3</a></li>
			<li id="toRight"><a class="small button" id="page2b_btn" href="#about">2</a></li>
			<li id="toRight"><a class="small button" id="page1b_btn" href="#about">1</a></li>-->
		</ul>
	</nav>
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
<script src="js/mainpage.js"></script>