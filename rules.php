<?php
include('db_conn.php');
session_start('login');
?>
<!DOCTYPE html>
<html>
	
	<head>
		
		<title>OMG|Mathrix'15</title>
		
		<!-- FAVICON -->


		<!-- scripts collection -->
		<script src="materialize/js/jquery.js"></script>
		<script src="materialize/js/materialize.js"></script>
		<script src="materialize/js/main.min.js"></script>
		<script src="materialize/js/newsletter.min.js"></script>
		
		<!-- CSS collection -->
		<link rel='stylesheet' type='text/css' href="materialize/css/materialize.css" />
		<link rel='stylesheet' type='text/css' href="materialize/css/style.min.css" />

	</head>

	<body style="background-color:#00bcd4;">

		<!-- NAV -->
		<nav id="header">
			<div class="nav-wrapper">
				<div class="logo"></div>
				<ul class="left"><li><span><h4>MATHRIX</h4></span></li></ul>
				<ul class="right">
					<li><span><a href="play.php">Play</a></span></li>
					<li><span><a href="leaderboard.php">Leaderboard</a></span></li>
					<li><span><a href="rules.php">Rules</a></span></li>
					<li><span><a href="contact.php">Contact</a></span></li>
					<li><span><?php
								if (!(isset($_SESSION['email']) )) {
									echo '<a href="index.php">Login</a></span></li>';
								}
								else
									echo '<a href="logout.php">Logout</a></span></li>';
								?>
				</ul>
			</div>
		</nav>
		
		<!-- INTRO -->

			<div class="container-custom" style="left:50%; text-align:left;margin-left: 5%;">				
				<br><br>
				<br><br>
				<header>
			        <h1>Rules</h1>
				</header>
				<ul class="a">
				 1.Users Must Provide Valid email address and must possess the confirmation sent to the email id to collect prize money<br>
				 2.Any Malpractice will not be encouraged<br>
				 3.The User must possess a valid student Id <br>
				 4.The Decision of the organizer is standing and final <br>
			</div>
			
	
		
	</body>	
	
</html>