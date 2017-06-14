#!/usr/bin/php
<?php

function ft_err()
{
	echo "Incorrect Parameters\n";
	return (0);
}

function ft_is_op($p1)
{
	$i  = 0;
	while (1)	
	{
		$elem =$p1[$i];
		if ($elem == " " || $elem == "\t" || $elem == "\n" )
			$i += 1;
		else
			break;
	}
	return ($elem);
}

if ($argc == 4)
{
	$op = ft_is_op($argv[2]);
	if ($op == "+")
		$res = $argv[1] + $argv[3];
	else if ($op == "-")
		$res = $argv[1] - $argv[3];
	else if ($op == "*")
		$res = $argv[1] * $argv[3];
	else if ($op == "/")
		$res = $argv[1] / $argv[3];
	else if ($op == "%")
		$res = $argv[1] % $argv[3];
	echo $res."\n";
}
else
	ft_err();
?>