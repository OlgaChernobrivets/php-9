 <?
error_reporting(E_ALL);
ini_set ('display_errors', 1);
	require 'functions_2.2.php';
	$test_number = (int)$_GET['id'];
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
	<? if (!isPOST()) : ?>
		<form action="" method="POST" enctype="multipart/form-data">
		<? foreach (open_test ($test_number) as $questoions) : ?>
		<tr>
			<td><?= $questoions ['id'] ?></td>
			<td><?= $questoions ['question'] ?></td></br>
			<td> 
			<label for = "Answer">Answer</label>
			<input id = "Answer" name="Q<?= $questoions ['id'] ?>" /></br>
			</td>
		</tr>
		<? endforeach; ?>
		<button type="submit">Отправить</button>
		</form>
		<? else: ?>
		<? chech_test ($test_number, $_POST); ?>
<?	endif; ?>
</body>
</html>