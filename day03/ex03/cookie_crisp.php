<?php
if ($_GET["action"] === "set")
	setcookie($_GET["name"], $_GET["value"]);
else if ($_GET["action"] === "get")
{
	echo $_COOKIE[$GET_NAME] ."\n";
}
else if ($_GET["action"] === "del")
{
	setcookie($_GET["name"], '', 1);
}
	
?>