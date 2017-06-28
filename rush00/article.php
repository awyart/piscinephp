<?php
$fd = fopen('stock.csv', 'r');
fgets($fd);
$i = 0;
while ($fd && !feof($fd))
{
    $a = explode(";", fgets($fd));
    $db[$i]["img"] = $a[0];
    $db[$i]["nom"] = $a[1];
    $db[$i]["prix"] = $a[2];
    $db[$i]["id"] = $a[3];
    $db[$i]["categorie"] = $a[4];
    $db[$i]["sous-categorie"] = $a[5];
    $i += 1;
}
$i = 0;
foreach ($db as $ele) 
{
	if (!($_GET['sub']) && !($_GET['name']))
	{
		if ($i == 0)
			echo "<tr>";
		echo "<td><figure><img src=".$ele["img"]."><figcaption class=\"legende\"><p>".$ele["nom"]."<br><strong class=\"price\">".$ele["prix"]."</strong></p><form methode =\"POST\" action=\"./add.php\"><input type=\"submit\" name =\"name\" value=\"".$ele['nom']."\"></form></figcaption></figure></td>";
		if ($i == 2)
		{
			echo "</tr>";
			$i = -1;
		}
	}
	if (!($_GET['sub']))
	{
		if ($ele["categorie"] === $_GET["name"])
		{
			if ($i == 0)
				echo "<tr>";
			echo "<td><figure><img src=".$ele["img"]."><figcaption class=\"legende\"><p>".$ele["nom"]."<br><strong class=\"price\">".$ele["prix"]."</strong></p><form methode =\"POST\" action=\"./add.php\"><input type=\"submit\" name =\"name\" value=\"".$ele['nom']."\"></form></figcaption></figure></td>";
			if ($i == 2)
			{
				echo "</tr>";
				$i = -1;
			}
		}
	}
	else if (!$_GET['name'])
	{
		if ($i == 0)
			echo "<tr>";
		echo "<td><figure><img src=".$ele["img"]."><figcaption class=\"legende\"><p>".$ele["nom"]."<br><strong class=\"price\">".$ele["prix"]."</strong></p><form methode =\"POST\" action=\"./add.php\"><input type=\"submit\" name =\"name\" value=\"".$ele['nom']."\"></form></figcaption></figure></td>";
		if ($i == 2)
		{
			echo "</tr>";
			$i = -1;
		}
	}
	else
	{
		if ($ele["categorie"] === $_GET["name"] && $ele["sous-categorie"] === $_GET["sub"])
		{
			if ($i == 0)
				echo "<tr>";
			echo "<td><figure><img src=".$ele["img"]."><figcaption class=\"legende\"><p>".$ele["nom"]."<br><strong class=\"price\">".$ele["prix"]."</strong></p><form methode =\"POST\" action=\"./add.php\"><input type=\"submit\" name =\"name\" value=\"".$ele['nom']."\"></form></figcaption></figure></td>";
			if ($i == 2)
			{
				echo "</tr>";
				$i = -1;
			}
		}
	}
	$i++;
}
?>