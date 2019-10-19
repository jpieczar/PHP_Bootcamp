<html>
	<head>
		<title>My Website</title>
	</head>
	<body>
		<form method="post" action="post_get.php">
			<div>
				<label>Name</label><br>
				<input type="text" name="name">
			</div>
			<div>
				<label>Email</label><br>
				<input type="text" name="email">
			</div>
			<input type="submit" value="submit">
		</form>
			<h1>
				<?php
					if (isset($_POST["name"]))
						echo $_POST["name"]."'s profile";
				?>
			</h1>
	</body>
</html>