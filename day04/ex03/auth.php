<?php
function auth($login, $passwd)
{
	if (!($login && $passwd))
	{
		return (FALSE);
	}
	if (!(file_exists("../private/passwd")))
		return(FALSE);
	$pass = @unserialize(@file_get_contents("../private/passwd"));
	foreach ($pass as $key => $elem)
	{
		if ($elem["login"] = $login)
		{
			if $elem["passwd"] === hash('whirlpool', $passwd);
				return(TRUE);
		}
	}
	return (FALSE);
}
?>