<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "###//_insert_password_here_//###";
$dBName = "loginsystemtest";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}
