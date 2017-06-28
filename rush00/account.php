<?php
	session_start();
if ($_SESSION["loggued_on_user"] === "" || !($_SESSION["loggued_on_user"]))
{
	header("Location: ./login.html");
}
else
{
	?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="./connexion.css">
	</head>
	<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
		<form method="post" action = "create.php" class="box">
			<?php
			if (!(file_exists("./private")))
			{
				mkdir("./private");
			}
			if (!(file_exists("./private/passwd")))
			{
				$fd = fopen("./private/passwd", 'w+');
			}
			$pass = unserialize(file_get_contents("./private/passwd"));
			if ($pass)
			{
				foreach ($pass as $key => $elem)
				{
					if ($elem["login"] === $_SESSION["loggued_on_user"])
						$test = $key;
				}
			}
			echo "<h1>BONJOUR <h2>".$_SESSION["loggued_on_user"]." </h2><h1> Voici vos informations : </h1><BR />";
			echo "<h1>Identifiant : ".$pass[$test]["login"]." <BR/>";
			echo "<h1>Nom : ".$pass[$test]["nom"]." </h1><BR/>";
			echo "<h1>Prenom : ".$pass[$test]["prenom"]." </h1><BR/>";
			echo "<h1>Adresse : ".$pass[$test]["address"]." </h1><BR/>";
			?>
		</form>
		<form method="post" action="./deleteok.php">
			<input class="button" type="submit" name="submit" value="Supprimer le compte" style="color:white">
		</form>
		<form method="post" action="./index.php">
			<input class="button1" type="submit" name="submit" value="Page d'accueil" style="color:white">
		</form>
		<form method="post" action="./modifinfo.html">
			<input class="button2" type="submit" name="submit" value="Modifier vos informations" style="color:white">
		</form>
	
	</div>	
	</body>
	</html>
<?php
}
?>