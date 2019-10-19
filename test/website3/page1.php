<?php
	if (isset($_POST["submit"]))
		session_start();

		// htmlentities is just added protection.
		$_SESSION["name"] = htmlentities($_POST["name"]);
		$_SESSION["email"] = htmlentities($_POST["email"]);

		header("location: page2.php");
?>
<html>
	<head>
		<title>Sessions</title>
	</head>
	<body> 				<!-- PHP_SELF simply means this very same page.-->
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<input type="text" name="email" placeholder="Enter Email">
		<br>
		<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>