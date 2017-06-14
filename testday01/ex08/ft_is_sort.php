<?php

function ft_is_sort($p1)
{
	$test = "0";
	$i = 0;
	foreach ($p1 as $elem)
	{
		if ($tmp == $elem || $i == 0)
			$i = 1;
		else if ($elem < $tmp)
		{
			if ($test == 0)
				$test = 1;
			else if ($test != 1)
				return (0);
		}
		else 
		{
			if ($test == 0)
				$test = 2;
			else if ($test != 2)
				return (0);
		}
		$tmp = $elem;
		continue;
	}
	return (1);
}

?>