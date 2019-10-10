#!/usr/bin/php
<?php
$i = 1;
while($i < $argc)
	echo sprintf("%s\n", $argv[$i++]);
?>