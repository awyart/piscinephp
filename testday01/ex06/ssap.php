#!/usr/bin/php
<?php
$test = "0";

if ($argc != 1)
{
	foreach ($argv as $elem1)
	{
		if ($test == "0")
		{
			$test = "1";
			continue;
		}
		$str = explode(" ", trim($elem1));
		foreach ($str as $elem2)
		{
			if ($elem2 != "" && $elem2 != " ")
			{
				$ret[$test] = $elem2;
				$test += "1";
			}
		}
	}
	asort($ret, SORT_STRING);
	foreach ($ret as $bon)
	{
		echo $bon."\n";
	}
}
?>