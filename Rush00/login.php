<?php
session_start();
if ($_GET["login"] != NULL && $_GET["passwd"] != NULL)
{
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["passwd"] = $_GET["passwd"];
}
?>