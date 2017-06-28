<?php
function auth($login, $passwd)
{
	if (!(file_exists("../htdocs/private/passwd")))
		return(FALSE);
	
	$pass = unserialize(file_get_contents("../htdocs/private/passwd"));
	if ($pass)	
	{
		foreach ($pass as  $elem)
		{
			if (($elem["login"] === $login) && ($elem["passwd"] === hash('whirlpool', $passwd)))
			{
				return (TRUE);
			}
		}
	}
	return (FALSE);
}
?>
