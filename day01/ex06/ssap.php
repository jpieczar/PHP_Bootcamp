#!/usr/bin/php
<?php
if ($argc > 1)
	{
	$i = 1;
	$str = trim($argv[$i++]);
	while ($i < $argc)
	{
		$str[strlen($str) + 1] = ' ';
		$str .= trim($argv[$i++]);
	}
	$arr = preg_split('/[\s]+/', $str);
	sort($arr);
	$str = implode("\n", $arr);
	print_r($str);
	echo "\n";
}
?>