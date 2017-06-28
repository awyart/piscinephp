<?php
	session_start();
if (!($_SESSION["loggued_on_user"] === "admin"))
{
	header("Location: ./index.php");
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
			<form method="post" action = "" class="box">
			Liste des comptes:
			<h1>
			admin <br \><?php
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
					echo $elem['login']."<BR/>";
				}
			}
		?>
		</h1>
		</form>
		<form method="post" action="./modifadmin.html">
			<input class="button2" type="submit" name="submit" value="Modifier un compte" style="color:white">
			</form>
		<form method="post" action="./index.php">
			<input class="button1" type="submit" name="submit" value="Page d'accueil" style="color:white">
		</form>
		<form method="post" action="./gestion.php">
			<input class="button1" type="submit" name="submit" value="Gerer articles" style="color:white">
		</form>
	
	</div>	
	</body>
	</html>
<?php
}
?>