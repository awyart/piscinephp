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
	<form methode="post" action="./delete.php" class="box">
	<h1>
		ETES VOUS SUR de vouloir supprimer votre compte,<?php echo $_SESSION["loggued_on_user"]."<BR?>"?>
		<input class="button" type="submit" value="OUI" style="color:white"/>
	</h1>
	</form>
<form methode="post" action="./index.php">
	<input class="button2" type="submit" value="Retour Menu" style="color:white"/>
</form>
</div>	
</body>
</html>
