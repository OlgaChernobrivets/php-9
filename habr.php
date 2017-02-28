<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);
mb_internal_encoding('utf-8');

include 'habr_functions.php';

$article_id = (int)$_GET['id'];
$article = file_get_contents('https://habrahabr.ru/post/'.$article_id.'/');
$file_name = __DIR__.'\data.json';

if($article == true)
{
	$result = cut_pieces($article);
}
else 
{
	$result['status'] = 'error';
}

$result_json = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
file_put_contents($file_name, $result_json);

var_dump($result);
