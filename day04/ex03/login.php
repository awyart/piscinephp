<?php
session_start();

if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] === "OK")
{
	$_SESSION["loggued_on_user"] = $_GET["login"];
	echo "OK\n";
}
{
	$_SESSION["loggued_on_user"] = "";
	echo "ERROR\n";
}