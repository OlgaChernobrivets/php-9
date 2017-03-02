<?php
error_reporting(E_ALL);
ini_set ('display_errors', 1);
function isPOST ()
{
	return !empty($_POST); 
}
function isGET ()
{
	return !empty($_GET); 
}
function count_files($dir){ 
 $count=0; // количество файлов. Считаем с нуля
 $directory=dir($dir); // 
 while($str=$directory->read()){ 
  if($str{0}!='.'){ 
    if(is_dir($dir.'/'.$str)) $c+=count_files($dir.'/'.$str); 
    else $count++; 
  }; 
 } 
 $directory->close(); // закрываем директорию
 return $count; 
}
function uploadFile($attribute)
{
	if (empty($_FILES[$attribute])) {
		return array(
			'message' => 'Файл в запросе не нейден',
			'is_success' => true,
			'file_path' => null);
	}
	$allowedExtensions = array('json');
	$dir = __DIR__.'\files';
	$number = count_files($dir)+1;
	$clientName = '/files/'."$number".'.json';
	$source = $_FILES[$attribute]['tmp_name'];
	$destination = __DIR__.$clientName;
	$ext = substr($destination, strrpos($destination, '.')+1);
	if (!in_array($ext, $allowedExtensions)) {
		return array(
			'message' => 'Файл с некорректным расширением!',
			'is_success' => false,
			'file_path' => null);
	}
	if (!move_uploaded_file($source, $destination)) {
		return array(
			'message' => 'Файл не удалось загрузить!',
			'is_success' => false,
			'file_path' => null);
	}
	return array(
			'message' => '',
			'is_success' => true,
			'file_path' => $clientName);
}
function open_test ($test_number)
{
	$TestFile = __DIR__ .'/files/'.$test_number.'.json';
	if (!file_exists($TestFile)) {
		die ('Тест не найден!');
	}
	$dataFromFile =file_get_contents($TestFile);
	$questoions = json_decode($dataFromFile, true);
	if (!$questoions) {
		$questoions = array();
	}
	return $questoions;
	
}

function chech_test ($test_number, $_POST)
{
	$TestFile = __DIR__ .'/files/'.$test_number.'.json';
	$dataFromFile =file_get_contents($TestFile);
	$questoions = json_decode($dataFromFile, true);
	if (!$questoions) {
		$questoions = array();
	}
	$result = 0;
	foreach ($questoions as $key => $value) {
		if ($questoions[$key]['answer']== $_POST['Q'.$questoions[$key]['id']]) {
			$result = ++$result;
		 }
	}
	$amount_of_questions = $key+1;
	echo "Congratulate!<br><h4>You have $result correct answer(s) from $amount_of_questions!<h4></br>";
}
 
?>