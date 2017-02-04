<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);

$userName = 'Ольга Чернобривец';
$userAge = '26';
$userMail = 'gmco555@gmail.com';
$userSity = 'Губкинский (ЯНАО)';
$shortInfo = 'Второгодник с группы PHP-7';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>About me</title>
</head>
<body>
<h1>Страница Ольги Чернобривец</h1>
<table>
	<tr>
		<td>Имя</td>
		<td><?= $userName ?></td>
	</tr>
	<tr>
		<td>Возраст</td>
		<td><?= $userAge ?></td>
	</tr>
	<tr>
		<td>Адрес электронной почты</td>
		<td><a href="mailto:<?= $userMail ?>"><?= $userMail ?></a></td>
	</tr>
	<tr>
		<td>Город</td>
		<td><?= $userSity ?></td>
	</tr>
	<tr>
		<td>Обо мне</td>
		<td><?= $shortInfo ?></td>
	</tr>
</table>
</body>
</html>