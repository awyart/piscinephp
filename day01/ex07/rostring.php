#!/usr/bin/php
<?php
if ($argc != "1")
{
	$str = explode(" ", $argv[1]);
	$i = 0;
	foreach ($str as $elem)
	{
		if ($elem != "" && $elem != " ")
		{
			$ret[$i] = $elem;
			$i += 1;
		}
	}
	$i -= 1;
	$tmp = 1;
	while ($tmp <= $i)
	{
		echo $ret[$tmp]." ";
		$tmp += 1;
	}
	echo $ret[0]."\n";
}
?>