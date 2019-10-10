#!/usr/bin/php
<?php
if ($argc == 2)
{
	$arr = preg_split('/[\s]+/', trim($argv[1]));
	echo sprintf("%s\n", implode(" ", $arr));
}
?>