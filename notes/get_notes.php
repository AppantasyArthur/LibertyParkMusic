<?php 

	header('Content-type: application/json; charset=utf-8');
	
	include_once '../php_global/dbsetting.php';
	
	include_once '../notes/notes.php';
	
	$note = new Note();
	
	$note->setContent("this is a note test");

	$note->setDate(date("Y-m-d H:i:s"));
	
	$response[$note->tableName] = array($note->convert2Array(), $note->convert2Array(), $note->convert2Array());
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);

?>