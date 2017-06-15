#!/usr/bin/php
<?php

date_default_timezone_set("Europe/Paris");

function 	ft_get_date($p1)
{
	if (strtolower($p1) == "janvier") 
		return ("01");
	else if (strtolower($p1) == "fevrier")
		return ("02");
	else if (strtolower($p1) === "mars")
		return ("03");
	else if (strtolower($p1) === "avril")
		return ("04");
	else if (strtolower($p1) === "mai")
		return ("05");
	else if (strtolower($p1) === "juin")
		return ("06");
	else if (strtolower($p1) === "juillet")
		return ("07");
	else if (strtolower($p1) === "aout")
		return ("08");
	else if (strtolower($p1) === "septembre")
		return ("09");
	else if (strtolower($p1) === "octobre")
		return ("10");
	else if (strtolower($p1) === "novembre")
		return ("11");
	else if (strtolower($p1) === "decembre")
		return ("12");
	echo "Wrong Format\n";
	exit();
}

function 	ft_check_day($p1)
{
	if ($p1 >= "0" && $p1 <= "31" && strlen($p1) <= 2)
	{
		return (TRUE);
	}
	return (FALSE);
}

function ft_check_year($p1)
{
	if (strlen($p1) == 4)
	{
		return(TRUE);
	}
	return (FALSE);
}

function ft_check_hour($p1)
{
	$a =explode(":", $p1);
	if (count($a) != 3)
		return (FALSE);
	if (strlen($a[0]) != 2 || strlen($a[1]) != 2 || strlen($a[2]) != 2)
		return (FALSE);
	if ($a[0] >= "24" || is_numeric($a[0]) === FALSE)
		return (FALSE);
	if ($a[1] >= "60" || is_numeric($a[1]) === FALSE)
		return (FALSE);
	if ($a[2] >= "60" || is_numeric($a[2]) === FALSE)
		return (FALSE);
	return (TRUE);
}

function ft_check_day2($date, $day)
{
	$d = date(w, $date);
	if (strtolower($day) == "lundi" && $d != 1)
		return(FALSE);
	else if (strtolower($day) == "mardi" && $d != 2)
		return(FALSE);
	else if (strtolower($day) == "mercredi" && $d != 3)
		return(FALSE);
	else if (strtolower($day)  == "jeudi" && $d != 4)
		return(FALSE);
	else if (strtolower($day) == "vendredi" && $d != 5)
		return(FALSE);
	else if (strtolower($day) == "samedi" && $d != 6)
		return(FALSE);
	else if (strtolower($day) == "dimanche" && $d != 7)
		return(FALSE);
	return(TRUE);
}

if ($argc != 1)
{
	$point = preg_split("/[ \t\r]+/",trim($argv[1]));
	if (count($point) != 5)
	{
		echo "Wrong Format\n";
		return (0);
	}
	
	if (ft_check_day($point[1]) === FALSE)
	{
		echo "Wrong Format\n";
		return (0);
	}
	$day = $point[1];
	$month = ft_get_date($point[2]);
	if (ft_check_year($point[3]) === FALSE)
	{
		echo "Wrong Format\n";
		return (0);
	}
	$year = $point[3];
	if (ft_check_hour($point[4]) === FALSE)
	{
		echo "Wrong Format\n";
		return (0);
	}
	$b = explode(":",$point[4]);
	$hour = $b[0];
	$min = $b[1];
	$sec = $b[2];
	$date = mktime($hour, $min, $sec, $month, $day, $year);
	if (ft_check_day2($date, $point[0]) === FALSE)
	{
		echo "Wrong Format-> Jour non correspondant\n";
		return (0);
	}
	echo $date;
}

?>