<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<title>MAGISHOP</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
<?php

if ($_SESSION["loggued_on_user"] === "" || !($_SESSION["loggued_on_user"]))
{
	?><form method="post" action="login.html">
		<input type="submit" name="submit" value="se connecter">
	</form>
	<?
}
else
{
	?><form method="post" action="logout.php">
		<input type="submit" name="submit" value="se deconnecter">
	</form>
	<form class="panier" method="post" action="./account.php">
		<input type="submit" name="submit" value="Mon compte">
	</form>
	<?php
}
?>
	<form class="Panier" method="post" action="./panier.php">
		<input type="submit" name="submit" value="Panier">
	</form>
	<form class="Panier" method="post" action="./inscript.html">
		<input type="submit" name="submit" value="S'inscrire">
	</form>
	<form class="admin" method="post" action="./admin.html">
		<input type="submit" name="submit" value="Admin">
	</form>
	</header>
	</form>
	</header>
	<nav>
		<ul>
			<li class="carte"><a href="index.php?name=carte">Jeux de cartes</a>
				<ul class="submenu">
					<li><a href="index.php?name=carte&&sub=bicycle">Bicycle</a></li>
					<li><a href="index.php?name=carte&&sub=copag">Copag</a></li>
				</ul>
			</li>
		</ul>
		<ul>
			<li class="jeux"><a href="index.php?name=jeux">Jeux traditionnels</a>
				<ul class="submenu">
				<li><a href="index.php?name=jeux&&sub=echec">Echec</a></li>
					<li><a href="index.php?name=jeux&&sub=casse-tete">Casse-têtes</a></li>	
				</ul>
			</li>
		</ul>
	</nav>
	<table>
		<tr>
			<?php include"article.php"; ?>
		</tr>
	</table>
</body>
</html>