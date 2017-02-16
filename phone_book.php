<? include 'functions.php';
error_reporting(E_ALL);
ini_set ('display_errors', 1) ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <h2>Домашняя работа по теме: Установка и настройка веб-сервера</h2>
</head>
<body>
<table>
<h3>Телефонная книга</h3>
<tr>
<th>Имя</th>
<th>Возраст</th>
<th>Мобильный телефон</th>
<th>Рабочий телефон</th>
</tr>
<? foreach (getPhones() as $phones) : ?>
	<tr>
		<td><?= $phones ['name'] ?></td>
		<td><?= $phones ['age'] ?></td>
		<td><?= $phones ['mobile number'] ?></td>
		<td><?= $phones ['office number'] ?></td>
	</tr>
<? endforeach; 
?>

	</table>
</body>
</html>