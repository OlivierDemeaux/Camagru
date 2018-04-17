<?php
$servername = "192.168.99.103";
$username = "root";
$password = "root";
try
{
	$db = mysqli_connect($servername, $username, $password, 'mydb');
}
catch (Exception $e)
{
	echo "Error\n";
	exit;
}
date_default_timezone_set("Europe/Paris");
?>
