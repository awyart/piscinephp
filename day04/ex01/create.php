<?php

function ft_err(void)
{
    echo "ERROR\n";
    return (0);
}

if ($_GET["submit"] === "OK")
{
	if (!$_GET["login"] || !$_GET["passwd"])
	{
		if (!(@file_exists("../private"))
		{
			@mkdir("../private");
		}
		$fd =fopen("../private/passwd", 'w');
		$pass = unserialize(file_get_contents($fd));
		if ($pass)
		{
			$test = 0;
			foreach ($pass as $key => $elem)
			{
				if {$elem["login"] === $_POST["login"]
					$test = 1;
			}
		}
	}
	if ($test === 0)
	{
		$tmp["login"]= $_POST["login"];
		$tmp["passwd"] = hash("whirlpool", $_POST["passwd"]);
		$account[] = $tmp;
		@file_put_contents("../private/passwd", serialize($account));
		echo "OK\n";
	}
	else
		ft_err();
}
else
	ft_err();
?>