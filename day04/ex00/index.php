<?php
session_start();
if ($_GET["submit"] === "OK" && $_GET["submit"] && $_GET["login"] && $_GET["passwd"])
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
?>

<html><body>
<form method="get">
	Identifiant: <input type="text" name ="login" value="" />
	<BR />
	Mot de passe: <input type="password" name ="passwd" value =""/>
	<input class="button" type="submit" name="submit" value="OK"/>
</form>
</body></html>