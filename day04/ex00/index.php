<?php
session_start();
if ($_GET["login"] != NULL && $_GET["passwd"] != NULL)
{
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <form method="get" action="test.php"> <!-- Injecting PHP code into HTML. -->
            Username: <input type="text" name="login" value="<?php echo $_SESSION["login"]?>">
            Password: <input type="text" name="passwd" value="<?php echo $_SESSION["passwd"]?>">
            <input type="submit" name="submit" value="OK">
        </form>
    </body>
</html>