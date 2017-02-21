<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);
mb_internal_encoding('utf-8');

$file_name = __DIR__.'\data.json';

$result = array();
$article_id = (int)$_GET['id'];
$article = file_get_contents('https://habrahabr.ru/post/'.$article_id.'/');

if($article==true)
{
	
	echo $article;

	$pie_title = explode('<title>', $article);
	$pie_title = explode('</title>', $pie_title[1]);

	$result['title'] = trim($pie_title[0]);


	$pie_text = explode('<meta property="og:description" content="', $article);
	$pie_text = explode('"', $pie_text[1]);
	$result['text'] = htmlspecialchars(trim($pie_text[0]));

	$pie_time = explode('<span class="post__time_published">', $article);
	$pie_time = explode('<', $pie_time[1]);

	$result['time'] = trim($pie_time[0]);

	$pie_rating = explode('Общий рейтинг', $article);
	$pie_rating = explode('>', $pie_rating[1]);
	$pie_rating = explode('<', $pie_rating[1]);
	
	$result['rating'] = trim($pie_rating[0]);

	$pie_stars = explode('"Количество пользователей, добавивших публикацию в избранное">', $article);
	$pie_stars = explode('<', $pie_stars[1]);

	$result['stars'] = trim($pie_stars[0]);

	$pie_views = explode('<div class="views-count_post" title="Просмотры публикации">', $article);
	$pie_views = explode('<', $pie_views[1]);

	$result['views'] = trim($pie_views[0]);

	var_dump($result);
}
else {

	$result['status'] = 'error';
}

$result_json = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
file_put_contents($file_name, $result_json, FILE_APPEND);



