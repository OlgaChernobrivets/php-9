<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);

$x = (int) $_GET['x'];
$a = 1;
$b = 1;
echo 'Вы ввели число: '.$x;
echo '</br>';
while ($a < $x) {
$c = $a;
$a = $a + $b;
$b = $c;
}
if ($a > $x) {
	echo 'Данное число не входит в ряд Фибонначи';
}
if ($a === $x) {
	echo 'Данное число входит в ряд Фибонначи';
}
