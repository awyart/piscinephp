<?php

function ft_err()
{
    echo "ERROR\n";
    return ;
}

if ($_POST["submit"] && $_POST["submit"] === "OK" && ($_POST["login"]) && ($_POST["passwd"]))
{
	if (!(file_exists("../htdocs")))
	{
		mkdir("../htdocs");
	}
	if (!(file_exists("../htdocs/private")))
	{
		mkdir("../htdocs/private");
	}
	$fd = fopen("../htdocs/private/passwd", 'w');
	$pass = unserialize(file_get_contents("../htdocs/private/passwd"));
	if ($pass)
	{
		$test = 0;
		foreach ($pass as $key => $elem)
		{
			if ($elem["login"] === $_POST["login"])
				$test = 1;
		}
	}
	if ($test === 0 || !($test))
	{
		$a["login"]= $_POST["login"];
		$a["passwd"] = hash("whirlpool", $_POST["passwd"]);
		$pass[] = $a;
		file_put_contents("../htdocs/private/passwd", serialize($pass));
		header('Location: ./index.html');
		echo "OK\n";
		exit();
	}
	else
	{
		ft_err();
	}
}
else
{
	ft_err();
}
?>