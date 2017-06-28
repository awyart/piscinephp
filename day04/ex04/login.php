<?php
session_start();
require('auth.php');

if ($_POST["login"] && $_POST["passwd"] && auth($_POST["login"], $_POST["passwd"]))
{
	$_SESSION["loggued_on_user"] = $_POST["login"];
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
</head>
<body style="background-color:#87CEFA">
	<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
	<iframe name="speak" src="speak.php" width="100%" height="50px" style="background-color: pink"> <BR/>
	</iframe>
	<a href="./index.html" > retour index </a>
</body>
</html>
<?php
}
else
{
	$_SESSION["loggued_on_user"] = "";
	echo "ERROR\n";
}
?>
