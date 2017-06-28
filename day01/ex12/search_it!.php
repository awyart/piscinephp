#!/usr/bin/php
<?php

if ($argc > 2)
{
	$key = $argv[1];
	$i = 0;
	$j = 0;
	foreach ($argv as $el)
	{
		if ($i < 2)
			$i += 1;
		else
		{
			$value = explode(":",$el);
			if ($key == $value[0])
			{
				$ret[$j] = $value[1];
				$j += 1;
			}
		}
	}
	$i = count($ret);
	if ($i != 0)
		echo $ret[$i - 1]."\n";
	return (0);

}
?>