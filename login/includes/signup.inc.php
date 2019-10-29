<?php
if(isset($_POST['signup-submit'])) {
	require 'dbh.inc.php';
	$username = trim($_POST['uid'], " \t\r\v\n"); /* Input */
	$email = $_POST['mail']; /* Input */
	$password = $_POST['pwd']; /* Input */
	$passwordRepeat = $_POST['pwd-repeat']; /* Input */

	/* Error handling */
	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
	{
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		header("Location: ../signup.php?error=invalidmailuid");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		header("Location: ../signup.php?error=invalidmail&uid=".$username);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		header("Location: ../signup.php?error=invaliduid&mail=".$email);
		exit();
	}
	else if ($password !== $passwordRepeat)
	{
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else /* Error handling done. */
	{
		$sql = "SELECT username FROM users WHERE username=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else
		{	/* Checks if username is already taken. */
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else
			{
				$sql = "INSERT INTO users (username, email, pass) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
				}
				else
				{ /* Feeds info into table. */
					$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
	
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($stmt); /* Closes to prevent wastage of resources, */
	mysli_close($conn);
}
else {
	header("Location: ../signup.php");
	exit();
}
?>