<?php
session_start();
date_default_timezone_set("Europe/Paris");
if (!($_SESSION["loggued_on_user"]))
{
	echo "ERROR\n";
}
else
{
	if (!($_POST["msg"] === FALSE))
	{
	    if (!(file_exists("../htdocs/")))
		{
			mkdir("../htdocs");
		}
		if (!(file_exists("../htdocs/private")))
		{
			mkdir("../htdocs/private");
		}
        if (!(file_exists("../htdocs/private/chat")))  
        {
            $fp = fopen("../htdocs/private/chat", 'x+');
        }
        else
        {
            $fp = fopen("../htdocs/private/chat", 'r+');
        }
        if($_POST["msg"] === ".clear")
        {
            unlink("../htdocs/private/chat");
            $fp = fopen("../htdocs/private/chat", 'x+');
        }
        else
        {
            $msg = unserialize(file_get_contents("../htdocs/private/chat"));
            flock($fp, LOCK_EX);
            $a["login"] = $_SESSION["loggued_on_user"];
            $a["time"] = time() + 2 * 3600;
            $a["msg"] = $_POST["msg"];
            $msg[] = $a;
            file_put_contents("../htdocs/private/chat", serialize($msg));
        }
    }
?>
<html>
<head>
    <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
    <form action="speak.php" method="POST">
        <input type="text" name="msg" value="" style="width :650; height:25;background-color:#87CEFA"/ autofocus>
        <input type="submit" name="submit" value="Envoi" />
    </form>  
</body>
<?php
}
?>