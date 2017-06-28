<?php
	session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Attention</title>
	<link rel="stylesheet" type="text/css" href="./connexion.css">
</head>
<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
	<form methode="post" action="" class="box">
	<h1>
		Merci de votre achat !
		Rappel :
		<?php
		echo "<br />";
		echo $_SESSION["loggued_on_user"];	
		echo "<br />";
		foreach ($_SESSION['panier'] as $elem)
		{
			echo $elem . "<br \>";
		}
		?>
		</h1>
	</form>
	<form method="post" action="./index.php">
		<input class="button1" type="submit" name="submit" value="Page d'accueil" style="color:white">
	</form>
</body>
</html>