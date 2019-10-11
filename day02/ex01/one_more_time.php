#!/usr/bin/php
<?php
if ($argc == 2)
{
	$months = array(
		1 => "Janvier",
		2 => "Février",
		3 => "Mars",
		4 => "Avril",
		5 => "Mai",
		6 => "Juin",
		7 => "Juillet",
		8 => "Août",
		9 => "Septembre",
		10 => "Octobre",
		11 => "Novembre",
		12 => "Sécembre",
	);

	$days = array(
		1 => "Lundi",
		2 => "Mardi",
		3 => "Mercredi",
		4 => "Jeudi",
		5 => "Vendredi",
		6 => "Samedi",
		7 => "Dimanche",
	);

	$Lmonths = array(
		1 => "janvier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "août",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "sécembre",
	);

	$Ldays = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche",
	);

	$arr = preg_split('/[\s]+/', trim($argv[1]));
	$time = preg_split('/:/', $arr[4]);
	
	if (count($arr) != 5)
	{
		echo "Wrong Format\n";
		exit();
	}
	if (!preg_match('/^[DJLMSVdjlmsv]{1}[a-z]{4,7}/', $arr[0]))
	{
		echo "Wrong Format\n";
		exit();
	}
	if (!preg_match('/^([1-9]|[12][0-9]|3[01])$/', $arr[1]))
	{
		echo "Wrong Format\n";
		exit();
	}
	if (!preg_match('/^[ADFJMNOSadfjmnos]{1}[a-zûé]{3,8}/', $arr[2]))
	{
		echo "Wrong Format\n";
		exit();
	}
	if (!preg_match('/^(19[7-9][\d])|([2-9][0-9][0-9][0-9])|([\d]+){5,}/', $arr[3]))
	{
		echo "Wrong Format\n";
		exit();
	}
	if (!preg_match('/^(2[0123]|(1[\d])|(0[1-9])):([0-5][\d]):([0-5][\d])$/', $arr[4]))
	{
		echo "Wrong Format\n";
		exit();
	}

	$numarr = array();

	if ((array_search($arr[2], $months) or array_search($arr[2], $Lmonths)) > 0 )
	{
		if (preg_match('/^[A-Z]$/', $arr[2][0]))
			$numarr[0] = array_search($arr[2], $months);
		else
			$numarr[0] = array_search($arr[2], $Lmonths);
	}
	else
	{
		echo "Wrong Format\n";
		exit();
	}
	if ((array_search($arr[0], $days) or array_search($arr[0], $Ldays)) > 0)
	{
		if (preg_match('/^[A-Z]$/', $arr[0][0]))
			$numarr[1] = array_search($arr[0], $days);
		else
			$numarr[1] = array_search($arr[0], $Ldays);
	}
	else
	{
		echo "Wrong Format\n";
		exit();
	}

	$numarr[2] = $arr[3];


	date_default_timezone_set("Europe/Paris");
	echo mktime((int)$time[0],(int)$time[1],(int)$time[2],(int)$numarr[0],(int)$numarr[1],(int)$numarr[2]);
	echo "\n";
	// h, min, s, month, d, y
}
?>