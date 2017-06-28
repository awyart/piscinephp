<?php
if ($_POST['id'] === "")
{
	header('Location: ./gestion.php');
}
else
{
	if (!(file_exists("./stock.csv")))
	{
		$fd = fopen("./stock.csv", 'w+');
	}
	else
	{
		$fd = fopen('stock.csv', 'r+');
	}
	$line[0] = fgets($fd);
	$i = 0;
	while ($fd && !feof($fd))
	{
	    $tmp = explode(';', fgets($fd));
	    if ($tmp !== $_POST['id'])
	   		$line[0] = $line[0].fgets($fd);
	    $i++;
	}
	file_put_contents("./stock.csv", implode("\n", $line));
	header('Location: ./gestion.php');
}
?>