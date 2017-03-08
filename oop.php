<?php
error_reporting(E_ALL);
ini_set ('display_errors', 1);

class MyCats
{
	public $voice = 'murr';
	private $legs;
	public function jump($legs)
	{
		if ($legs === 4)
		{
			$ability = 'Cat can jump';
		}
		if ($legs > 4) 
		{
			$ability = "Cat doesn't exist";
		}
		if ($legs < 4) 
		{
			$ability = "Cat can't jump";
		}
		return $ability;
	}
}
$tomas = new MyCats;
echo $tomas -> voice;
echo '</br>';
echo $tomas -> jump(4);
echo '</br>';

class BouquetOfFlowers
{
	public $flowersType;
	public $flowersLong = 60;
	public $addGreens = 1;
	private $flowerPrice;
	private $discount;
	private $flowersAmount;

	public function bouquetPrice ($flowerPrice, $money)
	{
		$flowersAmount = ($money - $money % $flowerPrice) / $flowerPrice;
		if ($flowersAmount % 2 == 0)
		{
			$flowersAmount = $flowersAmount - 1;
		}
			if ($flowersAmount > 15)
			{	
				$discount = 7;
			}
			else
			{
				$discount = 5;
			}
		
		$sum = ($flowerPrice * $flowersAmount) * (1 - $discount / 100);
		return $sum;
	}
}
$bouquetForMom = new BouquetOfFlowers;
echo $bouquetForMom -> flowersType = 'rose';
echo '</br>';
echo $bouquetForMom -> flowersLong;
echo '</br>';
echo $bouquetForMom -> bouquetPrice('100', '5000');

class clock
{
	private $batteryPower;
	public function __construct ($batteryPower)
	{
		$batteryPower = 12.5;
	}
	public function getWork ($batteryPower)
	{
		if ($batteryPower > 12)
		{
			echo 'Часы работают';
		}
		else 
		{
			echo 'Низкий заряд батареи';
		}
	}
}
$swatch = new clock (13);
echo $swatch -> getWork(11);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <title>Объекты и классы</title>
</head>
<body>
<p><h2>Инкапсуляция</h2></p>
<p>Инкапсуляция - механизм языка, позволяющий объединить в общую структуру код и данные, с которыми он работает, соединяя однотипные элементы данных (объекты) в классы с определением свойст (общих черт) и методов (способ управления объектами).</p>
<table>
	<thead>
		<td><b>Плюсы</b></td>
		<td><b>Минусы</b></td>
	</thead>
	<tr>
		<td>+Эффект "черного ящика" - управление системой без необходимости контроля того, что "под коробкой"</td>
		<td>-Сложность чтения кода, по сравнению с процедурным подходом</td>
	</tr>
	<tr>
		<td>+Сокрытие - возможность ограничить изменение свойств объекта</td>
		<td>-Для небольших проектов - увеличение объема кода для описания объектов и классов</td>
	</tr>
	<tr>
		<td>+Простота в изменении - можно поправить код в одном месте, и все объекты, входящие в класс, тоже поменяются</td>
		<td>-Требует больших ментальных затрат при проектировании - необходим более высокий уровень абстрактного мышления</td>
	</tr>
</table>
</body>
</html>