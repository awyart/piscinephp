#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
$file = fopen("/var/run/utmpx", "r");
while ($buf = fread($file, 628))
{
    $tab = unpack("a256a/ib/a32c/i4d/a256e/a64f", $buf);
    $user[] = $tab;
}
$i = 0;
foreach ($user as $elem)
{
	if ($elem["a"] !== 0 && strlen($elem["a"]) >= 3)
	{
		$ret[$i][0] = trim($elem["a"]);
		$ret[$i][1] = substr($elem["c"], 0 , 7);
		$ret[$i][2] = date('d', $elem["d3"]);
		$ret[$i][3] = date('M', $elem["d3"]);
		$ret[$i][4] = date('H', $elem["d3"]);
		$ret[$i][5] = date('i', $elem["d3"]);
		$i += 1;
	}
}
foreach ($ret as $elem)
{
	if ($elem[1]=== "console")
	{
		$tmp = $elem[0];
		break ;
	}
}
foreach ($ret as $elem)
{
	if ($elem[0] === $tmp)
	{
		echo $elem[0] . "   " . $elem[1] . "  " . $elem[3] . " " . $elem[2] . " ". $elem[4].":". $elem[5]." \n";
	}
}
?>