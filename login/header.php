<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
			<nav>
				<a href="#">
					<img src="img/beans.jpg" alt="404" width="250px">
				</a>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Portfolio</a></li><!-- The "#" means that the link is present on the current page. -->
					<li><a href="#">About me</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div>
				<?php
					if (isset($_SESSION["useruid"]))
						echo "<p>You are logged IN!</p>";
					else
						echo "<p>You are logged OUT!</p>";
				?>
				<form action="includes/login.inc.php" method="post"><!-- Checks if the user is legit. -->
					<input type="text" name="mailuid" placeholder="Username/Email..">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Signup</a>
				<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>
			</div>
		</header>
	</body>
</html>