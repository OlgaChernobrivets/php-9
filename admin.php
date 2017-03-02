<?
error_reporting(E_ALL);
ini_set ('display_errors', 1);
	require 'functions_2.2.php';
	
	if (isPOST()) {
		$result = uploadFile('test');
		if (!$result['is_success']) {
			die ($result['message']);
		}
		$clientName = $result['file_path'];
	}
	
	$login = (string)filter_input(INPUT_POST, 'login');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <title>Форма для загрузки файлов</title>
</head>
<body>
	<? if (!isPost()): ?>
		<form action="" method="POST" enctype="multipart/form-data">
			<label for = "login">Имя</label>
			<input id = "login" name="login" />
			<input name = "test" type = "file">

			<button type="submit">Отправить</button>
		</form>
	<? else: ?>
		<p>Ваш имя: <?= htmlspecialchars($login) ?></p>
		<? if ($clientName) : ?>
		<p>Ваш файл "<?= $clientName ?>"</p>
		<p><a href="http:\\localhost\list.php">Список тестов</a>
		<? endif; ?>
	<? endif; ?>
</body>
</html>