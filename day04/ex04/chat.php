<?php
session_start();
if (!($_SESSION['loggued_on_user']))
{
	echo "ERROR\n";
}
else
{
	if (file_exists("../htdocs/private/chat"))
	{
		$msg = unserialize(file_get_contents("../htdocs/private/chat"));
		if ($msg)
		{
			foreach ($msg as $elem)
			{
				if (strlen($elem["msg"]) > 0)
				{
					echo "[" . date('H:i', $elem["time"]) . "] <b>" . $elem["login"] . "</b>: " . $elem["msg"] . "<br />";
				}
			}
		}
	}	
}
?>