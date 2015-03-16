<?php
include('db_conn.php');
session_start('login');
if (!(isset($_SESSION['email']) )) {

header ("Location: index.php");

}
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
		<section id="intro" style="overflow:auto;">
			<div class="container-custom">
				<br>
				<header>
					<h2>Leaderboard</h2>
				</header>
				<table class="responsive-table">
			        <thead>
			          <tr>
			              <th data-field="id">Name</th>
			              <th data-field="name">Level</th>
			          </tr>
			        </thead>
			        <tbody>
			        
					<?php
						$query ="SELECT * FROM `user_detail` ORDER BY `level` DESC, `timestamp` DESC";
						$result = mysql_query($query);
						while($row = mysql_fetch_array($result))
						{
							echo '<tbody>
						          <tr>
						            <td>'.$row['name'].'</td>
						            <td>'.$row['level'].'</td>  
						          </tr>';
						}
					?>
			         </tbody>
			      </table>
			</div>
			
		</section>	

		


	
	</body>	
	
</html>