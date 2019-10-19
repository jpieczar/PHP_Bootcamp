<?php
	session_start();

	$name = $_SESSION["name"];
	$email = $_SESSION["email"];
?>
<html>
	<head>
		<title>Page 2</title>
	</head>
	<body>
		<h1><?php
			echo "Welcome $name.";
		?></h1>
	</body>
</html>