#!/usr/bin/php
<?php

function create_new_file($img, $dir)
{
	if (file_exists($dir) === FALSE)
		mkdir($dir);
	preg_match("/^(.*\/)(.*)/ism", $img, $match);
	$name = end($match);
	$newfile =fopen($dir."/".$name, 'w');
	$content = file_get_contents($img);
	file_put_contents($dir."/".$name, $content);

}

function create_new_file2($img, $dir)
{
	if (file_exists($dir) === FALSE)
		mkdir($dir);
	$img = $dir.$img;
	preg_match("/^(.*\/)(.*)/ism", $img, $match);
	$name = end($match);
	$newfile =fopen($dir."/".$name, 'w');
	$content = file_get_contents("http://".$img);
	file_put_contents($dir."/".$name, $content);
}

if ($argc === 2)
{
	$str= array();
	$link = $argv[1];
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, $link);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	$str = curl_exec($c);
	preg_match_all("/<IMG.+?SRC=\"(.*?)\"/ism", $str, $match);
	$tab = parse_url($link);
	$link = $tab["host"];
	foreach ($match[1] as $elem)
	{
		if (substr($elem, 0, 4) === "http") 
		{
			create_new_file($elem, $link);
		}
		else if (substr($elem, 0, 2) === "//")
		{
			create_new_file("http:".$elem,$link);
		}

		else
		{
			create_new_file2($elem, $link);
		}
	}
}
else
{
	echo "usage : ./photos.php url\n";
}
?>