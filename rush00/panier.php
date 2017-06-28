<?php
	session_start();
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Panier</title>
	<link rel="stylesheet" type="text/css" href="./connexion.css">
</head>
<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
	<?php
	if (count($_SESSION['panier']))	
	{
		foreach ($_SESSION['panier'] as $elem)
		{
			echo "<form methode =\"POST\" action=\"./del.php\"><input type=\"submit\" name =\"name\" value=\"".$elem."\"></form>";
		}
	}
	else
	{
		echo "<h1> Votre panier est vide</h1><br/>";
	}
	?>
	<form method="post" action="./clear.php">
		<input class="button1" type="submit" name="submit" value="Vider Panier" style="color:white">
	</form>
 	<form method="post" action="./index.php">
		<input class="button2" type="submit" name="submit" value="Page d'accueil" style="color:white">
	</form>
	<?php
	if ($_SESSION["loggued_on_user"] === "" || !($_SESSION["loggued_on_user"]))
	{
		echo "<form method=\"post\" action=\"./login.html\"><input class=\"button2\" type=\"submit\" name=\"submit\" value=\"Se connecter\" style=\"color:white\"></form>";
	}
	else if ((count($_SESSION['panier'])))
	{
		echo "<form method=\"post\" action=\"./buy.php\"><input class=\"button2\" type=\"submit\" name=\"submit\" value=\"Valider\" style=\"color:white\"></form>";
	}
	?>
</body>
</html>
