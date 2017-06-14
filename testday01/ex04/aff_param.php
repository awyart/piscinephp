#!/usr/bin/php
<?php
$i = "0";
foreach ($argv as $elem)
{
	if ($i == "0")
	{
		$i = "1";
		continue;
	}
	else
		echo $elem."\n";
}

?>