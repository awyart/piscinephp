<?php
session_start();
if ($_GET["submit"] === "OK")
{
	if (!$_GET["login"] || !$_GET["passwd"])
	{
		echo "Mais quel debile, il a pas mis de mot passe/login\n";
	}
	else
	{
		setcookie($_GET["login"], $_GET["passwd"], time() + 3600);
	}
}
//	curl -v -c cook.txt 'http://e2r10p2.42.fr:8080/j04/ex00/index.php'
// curl -v -b cook.txt 'http://e2r10p2.42.fr:8080/j04/ex00/index.php?login=sb&passwd=beeone&submit=OK'
// curl -v -b cook.txt 'http://e2r10p2.42.fr:8080/j04/ex00/index.php'
// curl -v 'http://e2r10p2.42.fr:8080/j04/ex00/index.php'
?>

<html><body>
<form method="get">
	Identifiant: <input type="text" name ="login" value="" />
	<BR />
	Mot de passe: <input type="password"/ name ="passwd">
	<input class="button" type="submit" name="submit" value="OK"/>
</form>
</body></html>