#!/usr/bin/php
<?php
$userin = fopen("php://stdin", "r");
while (!feof($userin))
{
	echo "Enter a number: ";
	$input = fgets($userin);
	if (is_numeric(trim($input)))
	{
		if ((int)$input % 2 == 0)
		{
			echo sprintf("The number %d is even\n", $input);
		}
		else 
		{
			echo sprintf("The number %d is odd\n", $input);
		}
	}
	else
	{
		echo sprintf("'%s' is not a number\n", trim($input));
	}
}
fclose($userin);
?>