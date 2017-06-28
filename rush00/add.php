<?php
session_start();
$_SESSION["panier"][] = $_GET["name"];
/*$fd = fopen('stock.csv', 'r');
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
    $i += 1;
}
foreach ($db as $key => $value)
{
	if ($value["id"] === $_GET["id"])
	{
		$_SESSION['panier'][$_GET["id"]]['prix'] = $value['prix'];
		$_SESSION['panier'][$_GET["id"]]['qty'] += 1;
		$_SESSION['panier'][$_GET["id"]]['name'] = $value['name'];
	}
}*/
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Attention</title>
	<link rel="stylesheet" type="text/css" href="./connexion.css">
</head>
<body  style= "background-image:url(http://www.arcturius.org/chroniques/wp-content/uploads/2015/04/Flat-Ocean.jpeg)">
	<form methode="post" action="./index.php" class="box">
	<h1>
		<?php
		echo "Le produit ".$_GET["name"]." a bien été ajouté au panier";	
		?>
		<input class="button" type="submit" value="Retour Menu" style="color:white"/>
	</h1>
	</form>
</div>	
</body>
</html>