<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "###//__insert_password_here__//###";
$dBName = "loginsystemtest";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}
