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
		<script>
			   $(document).ready(function(){
    			// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('#modal1').openModal();
			    $('.modal-trigger').leanModal();
			    $('.signin_submit').click(function(){
			    	if($('#username').val()== "" )
			    	{
			    		$('#username').addClass("invalid");
			    		$('#username').removeClass("validate");
			    		if($('#password').val()== "" )
				    	{
				    		$('#password').addClass("invalid");
				    		$('#password').removeClass("validate");
				    		
				    		
				    	}
			    		
			    	}
			    	else if($('#password').val()== "" )
				    	{
				    		$('#password').addClass("invalid");
				    		$('#password').removeClass("validate");
				    		
				    		
				    	}
			    	else {
			    		
			    		$('#signin_form').submit();
			    	}
			    		
			    });

			     $('.reg_submit').click(function(){
			    	if($('#username1').val()== "" )
			    	{
			    		$('#username1').addClass("invalid");
			    		$('#username1').removeClass("validate");
			    		
			    	}
			    	else if($('#email').val()== "" )
			    	{
			    		$('#email').addClass("invalid");
			    		$('#email').removeClass("validate");
			    	}
			    	else if($('#password1').val()== "" )
			    	{
			    		$('#password1').addClass("invalid");
			    		$('#password1').removeClass("validate");
			    		
			    	}
			    	
			    	else {
			    		var sEmail = $('#email').val();
						if (validateEmail(sEmail)) {
							if($('#password1').val()== $('#c_password').val()  )
								$('#registration_form').submit();
							else
								alert("password mismatch")
						}
						else {
							alert('Invalid Email Address');
							e.preventDefault();
						}
			    		
			    	}
			    		
			    	});
			
			  	});

			  function validateEmail(sEmail) {
				var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
				if (filter.test(sEmail)) {
				return true;
				}
				else {
				return false;
				}
				}

		</script>

	</head>

	<body style="background-color:white;">

		
		<!-- Modal Structure Login -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <div class="row">
		      	<form action="signin.php" method="post" id="signin_form">
		      		<center><h3>LOGIN</h3></center>
		      	<label class="error">Incorrect Username/Password</label>
			      <div class="input-field col s12">
			      	<i class="mdi-action-perm-identity prefix"></i>
			        <input required id="username" name="username" type="text" class="validate">
			        <label for="username">E-mail ID</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-lock prefix"></i>
			        <input id="password" name="password" type="password" class="validate">
			        <label for="password">Password</label>
			      </div>
			  </form>
			    </div>
		    </div>
		    <div class="modal-footer">
		      <a class="waves-effect waves-purple btn modal-action signin_submit" >Submit<i class="mdi-navigation-arrow-forward right"></i></a>
		      <a id="submit" class="waves-effect waves-blue btn modal-trigger left" href="#modal2">Sign Up/Register<i class="mdi-navigation-arrow-forward right"></i></a>


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
			        <input id="username1" name="username1" type="text" class="validate">
			        <label for="username1">Name</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-content-mail prefix"></i>
			        <input id="email" name="email" type="text" class="validate">
			        <label for="email">E-Mail</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-lock prefix"></i>
			        <input id="password1" name="password1" type="password" class="validate">
			        <label for="password1">Password</label>
			      </div>
			      <div class="input-field col s12">
			      	<i class="mdi-action-lock prefix"></i>
			        <input id="c_password" name="c_password" type="password" class="validate">
			        <label for="c_password">Confirm Password</label>
			      </div>
			      
			    </div>
		    </div>
		    </form>
		    <div class="modal-footer">
		      <a class="waves-effect waves-purple btn modal-action reg_submit" >Submit</a>
		    </div>
		  </div>

		<!-- NAV -->
		<nav id="header">
			<div class="nav-wrapper">
				<div class="logo"></div>
				<ul class="left"><li><span><h4>MATHRIX</h4></span></li></ul>
				<ul class="right">
					<li><span><a id="submit" class="modal-trigger" href="#modal1">Play</a></span></li>
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
		<section id="intro">
			<div class="container-custom">
				<br><br>
				<img src="materialize/mathrix_logo.png" class="logo" />
				<header>
					<h1>Math Treasure</h1>
					<h2>The power of brains</h2>
				</header>
				<a id="submit" class="waves-effect waves-purple btn btn-custom modal-trigger" href="#modal1">Play<i class="mdi-action-thumb-up right"></i></a>
			</div>
			
		</section>	

		

		
	</body>	
	
</html>