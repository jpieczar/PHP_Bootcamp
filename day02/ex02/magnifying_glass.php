#!/usr/bin/php
<?php
if ($argc == 2)
{
	$userin = fopen($argv[1], 'r');
	while (!feof($userin))
		$str .= fgets($userin);
	$str = preg_replace_callback('/<a.*?>\K(.*?)(?=<)/',
	function($str){return (strtoupper($str[0]));},
	$str);
	$str = preg_replace_callback('/<a.*title=\"\K(.*)(?=\")/',
	function($str){return (strtoupper($str[0]));},
	$str);
	echo ($str);
	echo "\n";	
}
?>