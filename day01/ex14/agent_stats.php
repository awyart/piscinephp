#!/usr/bin/php
<?php

if ($argc == 2)
{
	$i = 0;
	$user = array();
	$fd = fopen("php://stdin", 'r');
	fgets($fd);
	while ($fd && !feof($fd))
	{
		$part = explode(";", fgets($fd));
		if (count($part) == 4)
		{
			$line[$i] = $part;
			if (array_key_exists($part[0], $user) === FALSE)
			{
				$user[$part[0]][1] = 0;
				$user[$part[0]][2] = 0;
				$user[$part[0]][3] = 0;
			}
		}
		$i += 1;	
	}
	ksort($user);
	if ($argv[1] === "moyenne")
	{
		$total = 0;
		$i = 0;
		foreach ($line as $elem)
		{
			if ($elem[1] !== '' && $elem[2] !== "moulinette")
			{
				$i += 1;
				$total += $elem[1];
			}
		}
		echo ($total / $i) . "\n";
	}
	else if ($argv[1] === "moyenne_user" || $argv[1] === "ecart_moulinette")
	{
		foreach ($line as $elem)
		{
			if ($elem[1] !== '' && $elem[2] !== "moulinette")
			{
				$user[$elem[0]][1] += 1;
				$user[$elem[0]][2] += $elem[1];
			}
			else if ($elem[2] === "moulinette")
			    $user[$elem[0]][3] = $elem[1];
		}
		if ($argv[1] === "moyenne_user")
			foreach ($user as $usr => $elem)
			    echo $usr.":".($elem[2] / $elem[1])."\n";
		else
			foreach ($user as $usr => $elem)
				echo $usr.":".(($elem[2]/$elem[1]) - $elem[3])."\n";
	
	}
}
?>