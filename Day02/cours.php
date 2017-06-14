!/usr/bin/php
<?php

$tab = file("data.csv");
foreach ($tab as $elem)
{
	echo "$elem";
}
"/(<a )(.*?)(>)(.*)(<\/a>)/si"

?>
<?php
voir file_get_contents pur transormer en une chaine de caracteres
?>

<?php

fopen/fread/fwrite fonctionnement similaire au reste>

?>

<?php

$fd = fopen("data.csv", "r");

while ($line = fgets($fd))
{
	echo "$line";
}
fclose($fd);
?>
<?php

fgetcsv($fd, 0, ";") // decoupe le fichier en partant du principe que c'est un fichier csv
//{retour char => implique un tableau vide a la fin}
?>
						REGEXPR
<?php

$n1 = preg_match("/^t[oi]t[oi]$/", "bonjourbojjourbjeofj");
$n2 = preg_match("/^t[0-9]*t[a-g]$/", "bonjourbojjourbjeofj");
suffixe
^debut 
$fin
* = plusieurs fois.
? = 0 / 1
{4} = on en veut 4

\1 = va chercher la premiere paire de parenthees;
$nb = preg_match("/t([io])t\1/", "toti"); // voir man car c'est faux (lol)
?>
					EVAL //chaine de caractere contenant du code php
<?php

eval("echo 'Hello World';");

//attention au contr^ole du code : repetition des $vars.

?>
						===
<?php
//les variables sont types dynamiquement. 0 == "world" envoie vrai
//=== va faire une verification de type supplementaire
$my_tab = array("zero", "un", "deux");


if (array_search("un", $my_tab) !== FALSE); // va chercher un element en comptant la cle dans un tableau. renvoie l'index du tableau
	echo "Found\n";
?>
4
						Curl // lib curl pour mainpuler l'acces a des site web
<?php

$c = curl_init("http://www.42.fr");

$str = curl_exec($c);

echo "$str";

?>