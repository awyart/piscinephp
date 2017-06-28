#!/usr/bin/php
<?php

function ft_cmp_spe($p1,$p2)
{
	$a = strtolower($p1);
	$b = strtolower($p2);
	$i = 0;
	while ($i < strlen($a))
	{
		if ($a[$i] <= "9" && $a[$i] >= "0")
			$str1[$i] = ord($a[$i]) + 200;
		else if ($a[$i] >= "a" && $a[$i] <= "z")
			$str1[$i] = ord($a[$i]);
		else
			$str1[$i] = ord($a[$i]) + 500;
		$i += 1;
	}
	$i = 0;
	while ($i < strlen($b))
	{
		if ($b[$i] <= "9" && $b[$i] >= "0")
			$str2[$i] = ord($b[$i]) + 200;
		else if ($b[$i] >= "a" && $a[$i] <= "z")
			$str2[$i] = ord($b[$i]);
		else
			$str2[$i] = ord($b[$i]) + 500;
		$i += 1;
	}
	$i = 0;
	while ($str1[$i] == $str2[$i] && $i <= strlen($a))
		$i += 1;
	if ($str1[$i] > $str2[$i]) 
		return (FALSE);
	return(TRUE);
}
$i = 0;
if ($argc > 1)
{
	unset($argv[0]);
	foreach ($argv as $elem1)
	{
		$j = 0;
		$str = explode(" ", trim($elem1));
		while ($j < count($str))
		{
			$ret[$i] = $str[$j];
			$i += 1;
			$j += 1;
		}
	}
	$i = 0;
	while ($i < count($ret) - 1)
	{
		if (ft_cmp_spe($ret[$i], $ret[$i + 1]))
			$i += 1;
		else
		{
			$temp = $ret[$i];
			$ret[$i] = $ret[$i + 1];
			$ret[$i + 1] = $temp;
			$i = 0;
		}
	}
	foreach($ret as $bonjour)
	{
		echo $bonjour."\n";
	}
}
?>