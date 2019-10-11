#!/usr/bin/php
<?php
if ($argc > 1)
{
	$arr = explode('/[\s]+/', trim($argv[1]));
	$str = implode(" ", $arr);
	echo ("$str\n");
}
?>