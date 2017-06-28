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
	$test = 0;
	if ($pass)
	{
		foreach ($pass as $key => $elem)
		{
			
			if ($elem["login"] === $_POST["login"])
			{
				$test = $key + 1;
			}
		}
	}
	else
	{
		header('Location: ./modifinfoadmin.html');
	}
	if ($test !== 0)
	{
		unset($pass[$test - 1]);
		$pass1 =array_values($pass);
		file_put_contents("./private/passwd", serialize($pass1));
		?>php
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
<?php
	}
	else
	{
		header('Location: ./modifadmin.html');
	}
?>
