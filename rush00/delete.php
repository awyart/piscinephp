<?php
	session_start();
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
			{
				$test = $key;
			}
		}
	}
	$_SESSION["loggued_on_user"] = "";
	unset($pass[$test]);
	$pass1 =array_values($pass);
	file_put_contents("./private/passwd", serialize($pass1));
	session_destroy();
	header('Location: ./succes.html');
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Attention</title>
	<link rel="stylesheet" type="text/css" href="./connexion.css">
</head>
<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
	<form methode="post" action="./index.php" class="box">
	<h1>
		Compte supprimé !
		<input class="button" type="submit" value="Retour Menu" style="color:white"/>
	</h1>
	</form>
</div>	
</body>
</html>