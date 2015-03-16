<?php
include('db_conn.php');
session_start('login');
if (!(isset($_SESSION['email']) )) {

header ("Location: index.php");

}?>
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

	<body style="background-color:white;">

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
		<section id="intro" >
			<div class="container-custom" style="left:50%">				
				<br><br>
				<br><br>
				<header>
			        <h1>Contact</h1>
				</header>
				<h2>Dharmesh - 9500843137  rrdharmesh@gmail.com</h2>
				<h2>Suresh Prasanna - 9442573755  sureshprasanna70@gmail.com</h2>
			</div>
			
		</section>	
		
	</body>	
	
</html>