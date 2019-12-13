<?php
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
		<h3>Formula 1 Teams / season 2019</h3>
	</div>
	<nav id="main_menu">
		<ul>
			<li><a class="button" id="home_but"  href="mainpage.php">Home</a></li>
			<li id="toRight"><a class="button" id="logout_but">LogOut</a></li>
		</ul>
	</nav>
	
	<?php
		if (isset($_GET['idTeam'])) {
		$id = $_GET['idTeam'];
		}
		
		//add config file
		$config=simplexml_load_file('database/config.xml');

		$host=$config->host;
		$user=$config->user;
		$pass=$config->password;
		$dbname=$config->dbname;

		//create connection
		$conn = mysqli_connect($host,$user,$pass,$dbname);
			
		$queryT="SELECT * FROM `teams` where `teamId`=$id";
		$resultT = mysqli_query($conn,$queryT);
			
		while ($rowT=$resultT->fetch_assoc()) {
			$pict=$rowT["picture"];
			$fullName=$rowT["fullName"];
			$name=$rowT["name"];
			$points=$rowT["points"];
		}
	
		echo "
			<div>
				<ul class='list_Teams'>
					<li class='border' id='old_wiev'>
						<img class='imgTeam' src='content/$pict' alt='Workplace'>
						<p class='idTeam' id='id_fld'>$id</p>
						<p class='nameTeam'>$name</p>
						<!--<p class='pilot'>Lewis Hamilton</p>
						<p class='pilot'>Valtteri Bottas</p>-->
						<p class='pilot'><a>$points</a> points</p>
					</li>
					<li class='border' id='current_view'>
						<img class='imgTeam' id='pct_vw' src='content/$pict' alt='Workplace'>
						<p class='nameTeam' id='name_vw'>$name</p>
						<!--<p class='pilot'>Lewis Hamilton</p>
						<p class='pilot'>Valtteri Bottas</p>-->
						<p class='pilot' id='pnt_vw'><a id='pnt_vwa'>$points</a> points</p>
					</li>
				</ul>
			</div>
			<div class='edit_group'>
				<form class='edit_form' >
					<div class='choose_line'>
						<div class='edit_lim fat'>
							<label class='edit_lbl'>Select a picture:</label>
						</div>
						<div class='fileform'>
							<div id='fileformlabel'>$pict</div>
							<div class='selectbutton'>Choose File</div>
							<input type='file' name='upload' id='upload' onchange='getName(this.value)' accept='image/*' />
							</div>
					</div>
					<div>
						<div class='edit_lim'>
							<label class='edit_lbl'>Team - full name:</label>
						</div>
						<input class='form_field extralong non_block rrr' id='fName_edt' type='text' name='uname' value='$fullName' size='30' />
					</div>
					<div>
						<div class='edit_lim'>
							<label class='edit_lbl'>Team - short name:</label>
						</div>
						<input class='form_field long non_block rrr' id='name_edt' type='text' name='uname' value='$name' size='30' />
					</div>
					<div>
						<div class='edit_lim'>
							<label class='edit_lbl'>Points:</label>
						</div>
						<input class='form_field long non_block rrr' id='pnt_edt' type='text' name='uname' value='$points' size='30' />
					
					</div>
					<div>
						<input class='form_button toRight' 
							id='acpt_btn' 
							type='button'  
							value='Accept' 
						/>
						<input class='form_button toRight' 
							id='prv_btn' 
							type='button'  
							value='Preview' 
						/>
					</div>
				</form>
			</div>
		";
?>
	
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
				<a class="button bottomMenu" href="#home">OUR PARTNERS</a>
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
<script src="js/edit.js"></script>