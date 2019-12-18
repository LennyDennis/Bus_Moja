<?php
	session_start();

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="Bus_Moja";

	$conn = mysqli_connect($hostname, $username, $password, $dbname);
	

?>