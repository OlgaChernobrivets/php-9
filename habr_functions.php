<?php 
error_reporting(E_ALL);
ini_set ('display_errors', 1);
mb_internal_encoding('utf-8');

function cut_pieces($article)
{
	$result = array();
	$pies_delimeters = array(
			'title' => '<title>',
			'text' => '<meta property="og:description" content="',
			'time' => '<span class="post__time_published">',
			'rating' => 'Общий рейтинг',
			'stars' => '"Количество пользователей, добавивших публикацию в избранное">',
			'views'=> '<div class="views-count_post" title="Просмотры публикации">');

	$end_delimeter = '<';

	foreach ($pies_delimeters as $tag => $delimiter) {

		$pie = explode($delimiter, $article);

		if ($tag == 'rating')
		{
		 	$pie = explode('">', $pie[1]);
		}
		if ($tag === 'text')
		{
			$pie = explode('" />', $pie[1]);
		}
		else
		{
		 	$pie = explode($end_delimeter, $pie[1]);
		}
		
		$result[$tag] = htmlspecialchars(trim($pie[0]));
	}
	return $result;
}
