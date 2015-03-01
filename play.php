<?php
include('db_conn.php');
session_start('login');
if (!(isset($_SESSION['email']) || $_SESSION['email'] != '')) {

header ("Location: index.html");

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
$(document).ready(function() 
{
$("#loader").hide();
$('#submit').click(function()
{
var answer=$("#answer").val();
var dataString = 'answer='+answer;
$.ajax({
type: "POST",
url: "check_answer.php",
data: dataString,
cache: false,
beforeSend: function(){ $("#loader").show();},
success: function(data){
if(data=='true')
{
$('#modal2').openModal();
//$("#loader").hide();
//
//or
//window.location.href = "play.php";
}
else
{
$('#modal1').openModal();
//$("#loader").hide();
}
}
});
return false;
});
$('#continue').click(function(){
	location.reload();
})
$('#next').click(function(){
	location.reload();
})
});
</script>

	</head>

	<body style="background-color:white;">

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
					<li><span><a href="logout.php">Logout</a></span></li>
				</ul>
			</div>
		</nav>
		
		<!-- Modal Structure Login -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <div class="row">
		      	<center>
		      		That's almost close enough..!!! Think Harder.. Better Luck Next Time
			    </center>
		    </div>
		</div>
		<div class="modal-footer">
		     <a id="continue" class="waves-effect waves-blue btn btn-flat modal-trigger" href="#">Try Again<i class="mdi-action-thumb-up right"></i></a>
		 </div>
		</div>


		<div id="modal2" class="modal">
		    <div class="modal-content">
		      <div class="row">
		      	<center>
		      		Congratulations!!! That's Correct Answer.. 
			    </center>
		    </div>
		</div>
		<div class="modal-footer">
		     <a id="next" class="waves-effect waves-blue btn btn-flat modal-trigger" href="#">Continue<i class="mdi-action-thumb-up right"></i></a>
		 </div>
		</div>		
		
		<!-- INTRO -->
		<section id="intro">
			<div class="container-custom">
				
				<br><br>
				<img class="materialboxed" data-caption="A picture of some deer and tons of trees" width="250" style="
    				box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.32), 0 15px 35px 0px rgba(0, 0, 0, 0.41); */;"
				src='img/<?php 
				$query ="SELECT * FROM user_detail WHERE email='".$_SESSION['email']."'";
				$result = mysql_query($query);
				$row = mysql_fetch_array($result);
				echo $row['level'];?>.png'>
				<header>
					<form action="check_answer.php" method="post" id="poss">
					<div class="input-field col s12">
			      	<i class="mdi-action-account-circle prefix"></i>
			        <input id="answer" name="answer" type="text">
			        <label for="answer">Answer</label>
			      </div>
			      </form>
				</header>
				<div id="loader" class="progress">
				    <div class="indeterminate"></div>	  
			    </div>
				<a id="submit" class="waves-effect waves-purple btn btn-custom" href="#modal1" >Submit<i class="mdi-action-thumb-up right"></i></a>
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