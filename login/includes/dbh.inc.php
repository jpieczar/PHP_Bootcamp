<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "303097JpP";
$dBName = "loginsystemtest";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}