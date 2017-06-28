#!/usr/bin/php
<?php
while (true)
{
	echo "Entrez un nombre: ";

	if ($tmp = fgets(STDIN))
	{
		$i = trim($tmp);
		if (is_numeric($i) == 1)
		{
			if ($i >= "9223372036854775807" || $i <= "-9223372036854775808")
			{
				echo "Depassement de l'entier max\n";
			}
			else
			{
				echo "Le chiffre ".(int)$i." est ";
				if ($i % "2" == "0")
					echo "Pair\n";
				else
					echo "Impair\n";
			}
			
		}
		else
		{
			echo "'".$i."' n'est pas un chiffre\n";
		}
	}
	else
	{
		echo "\n";
		break ;
	}
}
?>