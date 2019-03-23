<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "stjpc";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
?>