<?php
	//shows info in the url.
	// if (isset($_GET["name"]))
	// {
	// 	// // print_r($_GET);
	// 	// $echothis = htmlentities($_GET["name"]);
	// 	// echo $echothis;
	// 	// // htmlentities help prevent things like cross-
	// 	// // site scripting.
	// 	// // echo $_GET["email"];
	// }
	
	// //does not show info in the url (much more secure)
	// if (isset($_POST["name"]))
	// {
	// 	// // print_r($_GET);
	// 	// $echothis = htmlentities($_POST["name"]);
	// 	// echo $echothis;
	// 	// // htmlentities help prevent things like cross-
	// 	// // site scripting.
	// 	// // echo $_GET["email"];
	// }

	// if (isset($_REQUEST["name"]))
	// {
	// 	// // print_r($_GET);
	// 	// $echothis = htmlentities($_REQUEST["name"]);
	// 	// echo $echothis;
	// 	// // htmlentities help prevent things like cross-
	// 	// // site scripting.
	// 	// // echo $_GET["email"];
	// }

	echo $_SERVER["QUERY_STRING"];
?>
<html>
	<head>
		<title>My Website</title>
	</head>
	<body>
		<form method="get" action="get_post.php">
			<div>
				<label>Name</label><br>
				<input type="text" name="name">
			</div>
			<div>
				<label>Name</label><br>
				<input type="text" name="email">
			</div>
			<input type="submit" value="submit">
		</form>
	</body>
</html>