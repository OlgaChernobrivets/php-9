<?php
error_reporting(E_ALL);
ini_set ('display_errors', 1);
$dir    = __DIR__.'\files';
$files1 = scandir($dir);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <br>
  <title>Список загруженных файлов</title>
</head>
<body>
<h2>Список файлов</h2>
<?
foreach ($files1 as $key => $value) {
	$id = substr($files1[$key], 0, strpos($files1[$key], '.'));
	if (strlen($files1[$key]) > 3) {?>
	<p><a href="<?='test.php?id='.$id?>">Тест №<?= $id?></a></p>
<?
	}
}
?>
</body>
</html>