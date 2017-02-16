<?php
error_reporting(E_ALL);
ini_set ('display_errors', 1);

define('LANG_EN', 'en');
define('LANG_RU', 'ru');
 
//Получение данных из телефонной книги
function getPhones()
{
	$PhoneBookFile = __DIR__ .'/phone_book.json';
	if (!file_exists($PhoneBookFile)) {
		die ('Файл данных не найден!');
	}
	$dataFromFile =file_get_contents($PhoneBookFile);
	$phones = json_decode($dataFromFile, true);
	if (!$phones) {
		$phones = array();
	}
	return $phones;
	
} 
?>