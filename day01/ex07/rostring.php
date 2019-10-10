#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	$arr = preg_split('/[\s]+/', $argv[1]);
	while ($i < count($arr))
		$arr2[] = $arr[$i++];
	$arr2[] = $arr[0];
	$str = implode(" ", $arr2);
	print_r($str);
	echo "\n";
}
?>