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
	natcasesort($arr);
	foreach($arr as $a)
	{
		if (is_numeric($a))
			$numarr[] = $a;
	}
	foreach($arr as $b)
	{
		if (ctype_alpha($b))
			$aplharr[] = $b;
	}
	foreach($arr as $c)
	{
		if (!ctype_alpha($c) and !is_numeric($c))
		$special[] = $c;
	}
	if (count($numarr))
		rsort($numarr);
	if (count($aplharr))
		foreach($aplharr as $d)
			$res0[] = $d;
	if (count($numarr))
		foreach($numarr as $e)
			$res0[] = $e;
	if (count($special))
		foreach($special as $f)
			$res0[] = $f;
	$res1 = implode("\n", $res0);
	print_r($res1);
	echo "\n";
}
?>