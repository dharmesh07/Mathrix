<?php
include('db_conn.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = 1 ; 

$query = "INSERT INTO user_detail(`name`,`email`,`password`,`level`) VALUES('$username' , '$email' , '$password' ,$level)";
echo $query;
$result= mysql_query($query);
if($result)
{
	session_start();
	$_SESSION['email']=$email;
	header("Location: play.php"); /* Redirect browser */
	exit();
}
else
{
	header("Location: login_fail.php"); /* Redirect browser */
	exit();
}
?>