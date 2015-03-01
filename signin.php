<?php
include('db_conn.php');
$email = $_POST['username'];
$password = $_POST['password'];
echo $username;
echo $password;
$query = "SELECT * FROM user_detail WHERE email='$email' AND password='$password'";
echo $query;
$result= mysql_query($query);
$row = mysql_fetch_array($result);
if($row)
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