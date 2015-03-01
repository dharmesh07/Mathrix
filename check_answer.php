<?php
include('db_conn.php');
session_start('login');
if(isset($_POST['answer']))
{
// username and password sent from Form
$answer=mysql_real_escape_string($_POST['answer']); 
}
$email = $_SESSION['email'];
$query = "SELECT * FROM user_detail WHERE email='$email'";
$result= mysql_query($query);
$row = mysql_fetch_array($result);
$level=$row['level'];
$query2 = "SELECT * FROM level_detail WHERE level = $level AND answer='$answer'";
$result2= mysql_query($query2);
$row = mysql_fetch_array($result2);
if($row)
{
	echo 'true';
	$new_level = $level + 1;
	$update_query = "UPDATE user_detail SET level = $new_level WHERE email = '$email'";
	mysql_query($update_query);
	$insert_query = "INSERT INTO logs(`email`,`level`,`flag`) VALUES ('$email',$level,0)";
	mysql_query($insert_query);
}
else
{
	$insert_query = "INSERT INTO logs(`email`,`level`,`flag`) VALUES ('$email',$level,1)";
	mysql_query($insert_query);
	echo 'false';
}
?>