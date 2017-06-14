<?php

function ft_split($p1)
{
	$tab = explode(" ", $p1);
	$i = "0";
	foreach ($tab as $elem)
	{
		if ($elem == "")
			continue;
		else
		{
			$ret[$i] = $elem;
			$i += "1";
		}
	}
	sort($ret);
	return ($ret);
}
?>