<?php
include('db_conn.php');
session_start('login');

if (!(isset($_SESSION['email']) && $_SESSION['email'] != '')) {

header ("Location: index.php");

}?>
<!DOCTYPE html>
<html>
	
	<head>
		
		<title>Mathrix'15</title>

		<!-- meta tags collection -->
		<meta name="description" content="A life worth sharing. Your best moments and achievements all in one place. Travels, projects, jobs, life goals, events and more. Sign up for beta.">
		<meta name="keywords" content="social network, social, life, awesome, memories, achievements, tracking, life goals">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta charset="UTF-8">
		
		<!-- FAVICON -->


		<!-- scripts collection -->
		<script src="materialize/js/jquery.js"></script>
		<script src="materialize/js/materialize.js"></script>
		<script src="materialize/js/main.min.js"></script>
		<script src="materialize/js/newsletter.min.js"></script>
		
		<!-- CSS collection -->
		<link rel='stylesheet' type='text/css' href="materialize/css/materialize.css" />
		<link rel='stylesheet' type='text/css' href="materialize/css/style.min.css" />
		<script>
			   $(document).ready(function(){
    			// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal-trigger').leanModal();
			  });
			  

		</script>

	</head>

	<body style="background-color:white;">

		
		<!-- Modal Structure Login -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <div class="row">
		      	<form action="signin.php" method="post" id="signin_form">
		      		<center><h3>LOGIN</h3></center>
			      <div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="username" name="username" type="text" class="validate">
			        <label for="username">Username</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="password" name="password" type="password" class="validate">
			        <label for="password">Password</label>
			      </div>
			  </form>
			    </div>
		    </div>
		    <div class="modal-footer">
		      <a class="waves-effect waves-purple btn-flat modal-action modal-close" onclick="document.getElementById('signin_form').submit();">Submit</a>
		      <a id="submit" class="waves-effect waves-blue btn btn-flat modal-trigger" href="#modal2">Sign Up/Register<i class="mdi-action-thumb-up right"></i></a>

		    </div>
		  </div>
		<!-- Modal Structure Register -->
		  <div id="modal2" class="modal">
		    <div class="modal-content">
		    	<form action="register.php" method="post" id="registration_form">
		      <div class="row">
		      	
		      		<center><h3>REGISTER</h3></center>
			      <div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="username" name="username" type="text" class="validate">
			        <label for="username">Username</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="email" name="email" type="text" class="validate">
			        <label for="email">E-Mail</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="password" name="password" type="password" class="validate">
			        <label for="password">Password</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="c_password" name="c_password" type="password" class="validate">
			        <label for="c_password">Confirm Password</label>
			      </div>
			      
			    </div>
		    </div>
		    </form>
		    <div class="modal-footer">
		      <a class="waves-effect waves-purple btn-flat modal-action modal-close" onclick="document.getElementById('registration_form').submit();">Submit</a>
		    </div>
		  </div>

		<!-- NAV -->
		<nav id="header">
			<div class="nav-wrapper">
				<div class="logo"></div>
				<ul class="left"><li><span><h4>MATHRIX</h4></span></li></ul>
				<ul class="right">
					<li><span>Play</span></li>
					<li><span>Rule</span></li>
					<li><span>FAQ</span></li>
					<li><span>Contact</span></li>
				</ul>
			</div>
		</nav>
		
		
		
		<!-- INTRO -->
		<section id="intro">
			<div class="container-custom">
				<br><br>
				<img src="materialize/mathrix_logo.png" class="logo" />
				<header>
					<h1>Riddles of the Sphinx</h1>
					<h2>The power of brains</h2>
				</header>
				<a id="submit" class="waves-effect waves-purple btn btn-custom modal-trigger" href="#modal1">Play<i class="mdi-action-thumb-up right"></i></a>
			</div>
			
		</section>	

		


<!--<footer class="page-footer">	
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </di
        </footer>-->

		
	</body>	
	
</html>