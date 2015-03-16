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

		<!-- meta tags collection -->
		<meta property="og:title" content="OMG" /> 
		<meta property="og:url" content="http://omg.mathrix.in" /> 
		<meta property="og:image" content="http://omg.mathirx.in/materialize/mathrix_logo.png" />
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
			globalas="";
			var answer=$("#answer").val();
			answer = answer.replace(/ /g,'');
			var dataString = 'answer='+answer;
			 console.log(answer);
				$.ajax({
				type: "POST",
				url: "check_answer.php",
				data: dataString,
				cache: false,
				beforeSend: function(){ $("#loader").show();},
				success: function(data){
					globalas=JSON.parse(data);
					if(globalas["status"] == "true")
					{
					$('#modal2').openModal();
					}
					else
					{
											
					$('#modal1').openModal();
					}
					}
				});
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
		
		<!-- Modal Structure Login -->
		  <div id="modal1" class="modal">
		    <div class="modal-content">
		      <div class="row">
		      	<center>
		      		Think Hard.. Better Luck Next Time
			    </center>
		    </div>
		</div>
		<div class="modal-footer">
		     <a id="continue" class="waves-effect waves-blue btn modal-trigger modal-close" href="#">Try Again<i class="mdi-action-thumb-up right"></i></a>
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
		     <a id="next" class="waves-effect waves-blue btn modal-trigger" href="#">Continue<i class="mdi-action-thumb-up right"></i></a>
		 </div>
		</div>		
		<?php
		$query ="SELECT * FROM user_detail WHERE email='".$_SESSION['email']."'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		$query2 ="SELECT * FROM level_detail WHERE level='".$row['level']."'";
		$result2 = mysql_query($query2);
		$row2 = mysql_fetch_array($result2);
		if($row['level']<3){
		?>
		<!-- INTRO -->
		<section id="intro" >
			<div class="container-custom" style="left:45%">				
				<br><br>
				<br><br>
				<img class="tooltipped" data-position="right" data-delay="50" data-tooltip="<?php echo $row2['clue'];?>" width="500px" height="250px" style="box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.32), 0 15px 35px 0px rgba(0, 0, 0, 0.41);"
				src='img/<?php 
				echo $row['level'];?>.png'>
				<header>
					<br>
					<div class="input-field col s12" style="left:30%">
			      	<i class="mdi-image-tag-faces prefix" style="color: #f5f5f5;"></i>
			        <input id="answer" name="answer" type="text" style="border-bottom: 1px solid #f5f5f5;color: #f5f5f5;">
			        <label for="answer" style="color: #f5f5f5;">Answer</label>
			      </div>
				</header>
				<div id="loader" class="progress">
				    <div class="indeterminate"></div>	  
			    </div>
				<a style="left:35%" id="submit" class="waves-effect waves-purple btn btn-custom" href="#modal1" >Submit<i class="mdi-action-thumb-up right"></i></a>
			</div>
			
		</section>	
		<?php
		}
		else{
?>
		<section id="intro" >
			<div class="container-custom" style="left:50%">				
				<br><br>
				<br><br>
				<header>
					Next Levels will be updated soon. Check this Space .
				</header>
			</div>
			
		</section>	



<?php		}?>

		
	</body>	
	
</html>