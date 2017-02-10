	<?php 
	error_reporting(E_ALL);
	ini_set ('display_errors', 1);

	$x = (int) $_GET['x'];
	$first_variable = 1;
	$second_variable = 1;
	echo 'Вы ввели число: '.$x;
	echo '</br>';
	while ($first_variable < $x) 
	{
		$third_variable = $first_variable;
		$first_variable = $first_variable + $second_variable;
		$second_variable = $third_variable;
	}
	if ($first_variable > $x)
	{
		echo 'Данное число не входит в ряд Фибонначи';
	}
	if ($first_variable === $x)
	{
		echo 'Данное число входит в ряд Фибонначи';
	}
