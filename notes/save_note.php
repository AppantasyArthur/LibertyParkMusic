<?php 

	header('Content-type: application/json; charset=utf-8');

	include_once '../php_global/dbsetting.php';
	include_once '../notes/notes.php';
	
	$note = new Note();
	$content = $_REQUEST[$note->COL_CONTENT];
	
	$response[$note->COL_CONTENT] = $content;
	$response[$note->COL_DATE] = date("Y-m-d H:i:s");
	
	$encoded = urldecode(json_encode($response));
	exit($encoded);
	

?>