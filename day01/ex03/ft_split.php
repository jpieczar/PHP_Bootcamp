<?php
function ft_split($userin)
{
	$arr = preg_split('/[\s]+/', trim($userin));
	sort($arr);
	return ($arr);
}
?>