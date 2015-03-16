<?php
$mysql_host = "mysql3.000webhost.com";
$mysql_database = "a9601090_mathrix";
$mysql_user = "a9601090_root";
$mysql_password = "Dharmesh07";
$host="localhost";
$user="root";
$pass="poiasdmnb943";
$db_name="mathrix";
try
{
$dbhandle = mysql_connect($host, $user, $pass);
$selected = mysql_select_db($db_name);
}
catch(Exception $e)
{
	echo $e;
}

?>

