#!/usr/bin/php
<?php

function  ft_do($p1)
{
	if (strstr($p1, "+"))
	{
		$ret= explode("+", $p1);
		$tab[0] = trim($ret[0]);
		$tab[1] = trim($ret[1]);
		if (is_numeric($tab[0]) && is_numeric($tab[1]))
			$res = ($tab[0] + $tab[1]);
	}
	else if (strstr($p1, "-"))
	{
		$ret = explode("-", $p1);
		$tab[0] = trim($ret[0]);
		$tab[1] = trim($ret[1]);
		if (is_numeric($tab[0])&& is_numeric($tab[1]))
			$res = ($tab[0] - $tab[1]);
	}
	else if (strstr($p1, "*"))
	{
		$ret = explode("*", $p1);
		$tab[0] = trim($ret[0]);
		$tab[1] = trim($ret[1]);
		if (is_numeric($tab[0])&& is_numeric($tab[1]))
			$res = ($tab[0] * $tab[1]);
	}
	else if (strstr($p1, "/"))
	{
		$ret = explode("/", $p1);
		$tab[0] = trim($ret[0]);
		$tab[1] = trim($ret[1]);
		if (is_numeric($tab[0])&& is_numeric($tab[1]))
			$res = ($tab[0] / $tab[1]);
	}
	else if (strstr($p1, "%"))
	{
		$ret = explode("%", $p1);
		$tab[0] = trim($ret[0]);
		$tab[1] = trim($ret[1]);
		if (is_numeric($tab[0])&& is_numeric($tab[1]))
			$res = ($tab[0] % $tab[1]);
	}
	else
	{
		echo "Syntax Error\n";
		return (0);
	}
	if ($res)
		echo $res."\n";
	else
		echo "Syntax Error\n";
}

if ($argc == 2)
	ft_do($argv[1]);
else
	echo "Incorrect Parameters\n";
?>