<?php
	session_start();
	$aa = $_SESSION['panier'];
	foreach ($aa as $key => $ele)
	{
		if ($ele == $_GET['name'])
			$test = $key;
	}
	unset($aa[$test]);
	unset($_SESSION['panier']);
	$_SESSION['panier'] = array_values($aa);
	header("Location: ./panier.php");
?>