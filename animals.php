<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);


$multiarray = array
(
	'Africa' => array('Herpestes ichneumon', "Ophiophagus gunther", "Struthio camelus", "Elephantidae", "Giraffa camelopardalis"),
	'Asia' => array ("Ailuropoda melanoleuca", "Alligator sinensis", "Macaca", "Phoenicopterus"),
	'Australia' => array ("Phascolarctos cinereus", 'Macropus', "Arcophilus laniarius", "Ornithorhynchus anatinus")
);

$separeted_animal = array();

foreach ($multiarray as $key => $continents)
{
	foreach ($continents as $key => $animal)
	{
		if (strpos($animal, ' ') !== false)
		{
			$separeted_animal[] = explode(' ', $animal);
		}
	}
	
}

$first_part = array();
$second_part = array ();

foreach ($separeted_animal as $key => $parts)		//разбиение имен животных на 2 массива (до пробела и после)
{
	$first_part[] = $parts[0];
	$second_part[] = $parts[1];
}

shuffle($second_part);								//перемешивание 2-ых частей

$twisted_animals = array();

foreach ($first_part as $key => $animal)			//сбор полного имени вымышленного животного
{
	$twisted_animals[] = "$animal".' '."$second_part[$key]";
}

foreach ($multiarray as $key => $continents)
{
	echo "<h2>$key</h2>";
	$final_list = array();
	foreach ($continents as $key => $animal)
	{
		foreach ($twisted_animals as $key => $animals_name)
		{
			$name = substr($animals_name, 0, strpos($animals_name, ' '));
			if (strpos($animal, $name)!==false)
			{
				$final_list[] = $animals_name;
			}

		}
	}
	$list = implode(', ', $final_list);
	echo $list;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Жестокое обращение с животными</title>
</head>
<body>

</body>
</html>