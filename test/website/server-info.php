<?php

	// Server array
	$server = [
		"Host server name" => $_SERVER["SERVER_NAME"],
		"Host header" => $_SERVER["HTTP_HOST"],
		"Server software" => $_SERVER["SERVER_SOFTWARE"],
		"Document root" => $_SERVER["DOCUMENT_ROOT"],
		"Current page" => $_SERVER["PHP_SELF"],
		"Script name" => $_SERVER["SCRIPT_NAME"],
		"Absolute path" => $_SERVER["SCRIPT_FILENAME"]
	];

	// echo $server["Host server name"]."</br>";
	// echo $server["Host header"]."</br>";
	// echo $server["Server software"]."</br>";
	// echo $server["Document root"]."</br>";
	// echo $server["Current page"]."</br>";
	// echo $server["Script name"]."</br>";
	// echo $server["Absolute path"]."</br>";

	// echo "<------------------------------->"."</br>";

	// Client array
	$client = [
		"Client system info" => $_SERVER["HTTP_USER_AGENT"],
		"Client ip" => $_SERVER["REMOTE_ADDR"],
		"Remote port" => $_SERVER["REMOTE_PORT"]
	];

	// echo $client["Client system info"]."</br>";
	// echo $client["Client ip"]."</br>";
	// echo $client["Remote port"]."</br>";
?>