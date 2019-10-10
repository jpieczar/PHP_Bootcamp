<?php
function ft_is_sort($user)
{
	$i = 0;
	$copy = $user;
	sort($copy);
	while ($i < count($user))
	{
		if (strcmp($user[$i], $copy[$i]))
			return (0);
		$i++;
	}
	return (1);
}
?>