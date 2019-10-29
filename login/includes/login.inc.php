<?php


if (isset($_POST["login-submit"]))
{
	require "dbh.inc.php"; /*This is a connection to the database. */

	$mailuid = $_POST["mailuid"]; /* Allows the user to either signin with email or username. */
	$password = $_POST["pwd"];

	if (empty($mailuid) || empty($password))
	{
		header("Location: ../index.php?error=Empty_fields");
		exit();
	}
	else
	{
		/* Checks if user exists. */
		$sql = "select * from users where username=? or email=?;";
		$stmt = mysqli_stmt_init($conn); /* Initialising with the correct statement. */
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("Location: ../index.php?error=SQL_Error");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid); /* Passes uses input (parameters) to the databse to see if they exist. */
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result))  /* <<<<<<<<<< */
			{
				$pwdCheck = password_verify($password, $row["pass"]);
				if ($pwdCheck == false)
				{
					header("Location: ../index.php?error=Wrong_Password");
					exit();
				}
				else if ($pwdCheck == true)
				{
					session_start();
					$_SESSION["userid"] = $row["id"];
					$_SESSION["useruid"] = $row["username"];

					header("Location: ../index.php?Successful_Login");
					exit();

				}
				else
				{
					header("Location: ../index.php?error=Wrong_Password");
					exit();
				}
			}
			else /* <<<<<<<< */
			{
				header("Location: ../index.php?error=No_User");
				exit();
			}
		}
	}
}
else{
	header("Location: ../index.php?jamaica");
	exit();
}

?>