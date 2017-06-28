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
			<form method="post" action = "./addarticle.php" class="box">

				Image<input type="text" name ="img" value="" autofocus/>
				<BR />
				Nom <input type="text" name ="nom" value = ""/>
				<BR />
				Prix <input type="text" name ="prix" value = ""/>
				<Br/>
				Categorie <input type="text" name ="categorie" value = ""/>
				<br />
				Sous-categorie <input type="text" name ="sous-categorie" value = ""/>
			<br />

			<br \><?php
			if (!(file_exists("./stock.csv")))
			{
				$fd = fopen("./stock.csv", 'w+');
			}
			else
			{
				$fd = fopen('stock.csv', 'r');
			}
			fgets($fd);
			$i = 0;
			while ($fd && !feof($fd))
			{
			    $a = explode(";", fgets($fd));
			    $db[$i]["img"] = $a[0];
			    $db[$i]["nom"] = $a[1];
			    $db[$i]["prix"] = $a[2];
			    $db[$i]["id"] = $a[3];
			    $db[$i]["categorie"] = $a[4];
			    $db[$i]["sous-categorie"] = $a[5];
			   	echo $db[$i]['id']." : ".$db[$i]['nom']." : ". $db[$i]['categorie']." : ". $db[$i]['sous-categories']. "<br>";
			    $i += 1;
			}
		?>
		<input class="button1" type="submit" name="submit" value="ajouter un produit" style="color:white">
		</form>
		<form method="post" action="./index.php">
			<input class="button1" type="submit" name="submit" value="Page d'accueil" style="color:white">
		</form>
		<form method="post" action="./delarticle.php">
			ID <input type="text" name ="id" value = ""/>
				<br>
			<input class="button2" type="submit" name="submit" value="supprimer un article" style="color:white">
		</form>
	
	</div>	
	</body>
	</html>
<?php
}
?>