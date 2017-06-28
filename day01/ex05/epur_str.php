#!/usr/bin/php
<?php
if ($argc == 2)
{
	$str = explode(" ", trim($argv[1]));
	echo $str[0];
	$i = 0;
	foreach ($str as $elem)
	{
		if ($i == 0 || $elem == " " || $elem == "")
		{
			$i = 1;
			continue;
		}
		echo " ".$elem;
	}
	echo "\n";
}

?>