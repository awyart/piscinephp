#!/usr/bin/php
<?php
if ($argc != 1)
{
	

	if (($str = file_get_contents($argv[1])) === FALSE)
	{
		echo "erreur lecture du fichier html\n";
		return (0);
	}
	$str = preg_replace_callback( "/(<a )(.*?)(>)(.*)(<\/a>)/ism", 
		function($reg)
		{
			$reg[0] = preg_replace_callback("/( title=\")(.*?)(\")/ism", 
							function($reg0)
							{
								return ($reg0[1]."".strtoupper($reg0[2])."".$reg0[3]);
							},$reg[0]);
			$reg[0] = preg_replace_callback("/(>)(.*?)(<)/ism",
							function($reg1)
							{
			 					return ($reg1[1]."".strtoupper($reg1[2])."".$reg1[3]);
							},$reg[0]);
		 return ($reg[0]);
		}, $str);
	echo $str;
}
else
	echo "usage : ./loupe.php file.html\n";
?>